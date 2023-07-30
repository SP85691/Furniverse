from flask import Flask, render_template, request, session, redirect, url_for, flash
from flask_login import LoginManager, current_user, login_user,logout_user, login_required
from flask_sqlalchemy import SQLAlchemy
from flask_admin import Admin
from flask_admin.contrib.sqla import ModelView
from datetime import timedelta

app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///furniverse.db'
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False
app.secret_key = "this_is_my_secret_key"
app.permanent_session_lifetime = timedelta(minutes=10)

db = SQLAlchemy(app)

user = [] 

@app.route('/')
def index():
    return render_template('Main.html', title_page="Home")

@app.route('/home')
def home():
    return render_template('Home.html')

@app.route('/auth')
def auth_user():
    return render_template('user_signup.html')

@app.route('/signup')
def signup():
    return render_template('signup.html')

@app.route('/signup', methods=['POST', 'GET'])
def signup_post():
    if request.method == 'POST':
        f_name = request.form.get('f_name')
        l_name = request.form.get('l_name')
        name = f_name +' '+ l_name
        email = request.form.get('email')
        password = request.form.get('password')

        user_email = User.query.filter_by(email=email).first()
        if user_email:
            flash('This User already exists')
            return redirect(url_for('signup'))
        
        else:
            new_user = User(name=name, email=email, password=password)

            db.session.add(new_user)
            db.session.commit()
            db.session.close()

    return redirect(url_for('log_user')) 

@app.route('/auth', methods=['GET', 'POST'])
def log_user():
    if request.method == 'POST':
        email = request.form.get('email')
        password = request.form.get('password')

        user = User.query.filter_by(email=email).first()

        if user and password == user.password:
            login_user(user)  # Log in the user
            session.permanent = True
            return redirect(url_for('index'))

        elif email != user or password == user.password:
            flash('Invalid username or password')
            return redirect(url_for('auth.login'))
        
        return redirect(url_for('log_user'))
    return user

@app.route('/logout')
@login_required
def logout():
    logout_user()  # Log out the user
    db.session.close()
    session.clear()
    return redirect(url_for('log_user'))

@app.route('/services')
def services():
    return render_template('service.html', title_page="Services")

@app.route('/about')
@login_required
def about():
    return render_template('About.html', title_page="About")

@app.route('/projects')
def projects():
    return render_template('Project.html')

@app.route('/contact')
def contact():
    return render_template('Contact.html')

@app.route('/contact', methods=['POST', 'GET'])
def contact_post():
    if request.method == 'POST':
        name = request.form.get('name')
        email = request.form.get('email')
        phone = request.form.get('phone')
        message = request.form.get('message')

        contact = Contact_Us(name=name, email=email, phone=phone, message=message)

        db.session.add(contact)
        db.session.commit()
        db.session.close()

    return redirect(url_for('index')) 

@app.route('/cart')
def cart():
    return render_template('cart.html', title_page="Cart")

# Setup Flask-Login
login_manager = LoginManager()
login_manager.login_view = "log_user"
login_manager.init_app(app)

from .models import User, Contact_Us

# User loader function
@login_manager.user_loader
def load_user(user_id):
    return User.query.get(int(user_id))

@app.before_request
def make_session_permanent():
    session.permanent = False

# Create Flask-Admin panel
admin = Admin(app, name='Control Panel')
admin.add_view(ModelView(User, db.session))
admin.add_view(ModelView(Contact_Us, db.session))


with app.app_context():
    db.create_all()

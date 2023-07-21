from flask import Flask, render_template, request, redirect, url_for
from flask_sqlalchemy import SQLAlchemy

app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///furniverse.db'
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False
db = SQLAlchemy(app)

user = [] 

@app.route('/')
def index():
    return render_template('Main.html')

@app.route('/home')
def home():
    return render_template('Home.html')

@app.route('/auth')
def auth_user():
    return render_template('user_signup.html')

@app.route('/auth', methods=['GET', 'POST'])
def log_user():
    if request.method == 'POST':
        email = request.form.get('email')
        password = request.form.get('password')

        data = {
                "Email": email, 
                "Password": password
            }

        user.append(data)

        return user

from datetime import datetime
from Furniverse import app, db
from flask_login import UserMixin

class User(db.Model, UserMixin):
    __tablename__ = "user"
    id = db.Column(db.Integer, primary_key=True, nullable=False, autoincrement=True)
    name = db.Column(db.String(255), nullable=False)
    email = db.Column(db.String(255), nullable=False, unique=True)
    password = db.Column(db.String(255), nullable=False)

    created_at = db.Column(db.DateTime, nullable=False, default=datetime.utcnow())
    

    def __repr__(self):
        return f'<User {self.username}>'
    
class Contact_Us(db.Model, UserMixin):
    __tablename__ = "contact_us"
    id = db.Column(db.Integer, primary_key=True, nullable=False, autoincrement=True)
    name = db.Column(db.String(255), nullable=False)
    email = db.Column(db.String(255), nullable=False)
    phone = db.Column(db.String(255), nullable=False)
    message = db.Column(db.String(255), nullable=False)

    def __repr__(self):
        return f'<User {self.name}>'
import pymysql

def get_connection():
    # adjust these values to match your XAMPP/MySQL setup
    return pymysql.connect(
        host="localhost",
        user="root",        # XAMPP default user
        password="",        # XAMPP default has no password
        database="emotion_db", # make sure this DB exists
        cursorclass=pymysql.cursors.DictCursor
    )

from flask import Flask, render_template, url_for, redirect, request ,flash ,session
import sqlite3,os
con=sqlite3.connect('data.sqlite')
app = Flask(__name__)
app.secret_key="secret"
con.executescript('''
create table if not exists volunteer(
    id integer not null primary key autoincrement unique,
    mail text not null unique,
    number text not null unique,
    password text not null,
    name text,
    location text,
    hours integer
);

create table if not exists event(
    id integer not null primary key autoincrement unique,
    name text,
    location text,
    date text,
    skills text,
    material text,
    time text
);

create table if not exists registered(
    volunteer_id integer not null unique,
    event_id integer not null unique,
    start text,
    end text,
    task integer,
    primary key(volunteer_id,event_id)
);
''')
con.commit()
con.close()

inta=0
hid=""
bloc=""

@app.route('/success',methods={'POST','GET'})
def success():
    return render_template('success.html')

@app.route('/logout',methods=['POST','GET'])
def logout():
    inta=0
    hid="block"
    bloc="none"
    return render_template('overview.html',hide=hid,show=bloc)

@app.route('/dashboard',methods=['POST','GET'])
def dashboard():
    return render_template('cart.html')

@app.route('/feedback',methods=['POST','GET'])
def feedback():
    return render_template('formpage.html')

@app.route('/overview',methods=['POST','GET'])
def overview():
    try:
        inta=session["inta"]
    except KeyError:
        inta=session["inta"]=0

    if inta==0:
        hid="block"
        bloc="none"
    return render_template('overview.html',hide=hid,show=bloc)
@app.route('/untitled',methods=['POST','GET'])
def untitled():
    return render_template('untitled.html')

@app.route('/register',methods=['POST','GET'])
def register():
    name=request.form['name']
    mail=request.form['e-mail']
    password=request.form['password']
    number=request.form['contact']
    location=request.form['city']
    con=sqlite3.connect('data.sqlite')
    f=con.execute("select * from volunteer where number =?",(number,)).fetchall()
    if len(f) != 0:
        con.close()
        return render_template('login.html',error="You are already a volunteer")
    con.execute('''insert into volunteer(mail,number,password,name,location,hours) values (?,?,?,?,?,?)''',(mail,number,password,name,location,0,))
    con.commit()
    con.close()
    return render_template('login.html')

@app.route('/loginpage',methods=['POST','GET'])
def loginpage():
    return render_template('login.html')

@app.route('/signuppage',methods=['POST','GET'])
def signuppage():
    return render_template('signup.html')

@app.route('/products',methods=['POST','GET'])
def products():
    return render_template('products.html')

@app.route('/',methods=['POST','GET'])
def start():

    if inta==0:
        hid="block"
        bloc="none"
    return render_template('index.html')

@app.route('/index',methods=['POST','GET'])
def index():
    return render_template('index.html')

@app.route('/session',methods=['POST','GET'])
def session():
    return render_template('session.html')

@app.route('/login',methods=['POST','GET'])
def login():
    inta=1
    con=sqlite3.connect('data.sqlite')
    email=request.form['e-mail']
    password=request.form['password']
    mail=con.execute('''select password from volunteer where mail = ?''',(email,)).fetchall()
    print(mail)
    con.close()
    if len(mail)== 0:
        return render_template('signup.html')
    elif mail[0][0]==password:
        hid="none"
        bloc="block"
        return render_template('products.html',hide=hid,show=bloc)
    else:
        return render_template('login.html',error="Try again!")

if __name__=='__main__':
    app.run(debug=True)

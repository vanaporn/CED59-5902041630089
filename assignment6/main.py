from flask import Flask,  render_template
app = Flask(__name__)

@app.route('/')
def index():
    return render_template('register1.html')


if __name__ == '__main__':
    app.run()

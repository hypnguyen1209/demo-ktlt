from flask import Flask, request, render_template_string, redirect
import jinja2

app = Flask(__name__)


@app.route('/', methods=['GET'])
def home():
        qs = request.args.get('name')
        if qs:
            template = '''
<!DOCTYPE html>
    <html>
    <head>
        <title>Lab</title>
    </head>
    <body>
    <h1>Hello %s, nice to meet you!</h1>
    </body>
</html>''' % qs
            return render_template_string(template)
        else:
            return redirect('/?name=Hiep')

if __name__ == '__main__':
        app.run(host='0.0.0.0', port=8888, debug=False)
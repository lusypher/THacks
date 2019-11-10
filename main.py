from flask import request, app
from werkzeug.utils import secure_filename

app.config["UPLOAD_FOLDER"] = "uploads"

@app.route("/sendfile", methods=["POST"])
def send_file():
    fileob = request.files["file2upload"]
    filename = secure_filename(fileob.filename)
    save_path = "{}/{}".format(app.config["UPLOAD_FOLDER"], filename)
    fileob.save(save_path)
    return "successful_upload"
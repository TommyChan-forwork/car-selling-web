<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>File Upload</title>
<style>
.button {
  background-color: white;
  color: black;
  border: 2px solid #555555;
  padding: 4px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button:hover {
  background-color: #555555;
  color: white;
}
</style>
</head>
<body>
<br>
<form action="imageuploadhandler.php" method="post" enctype="multipart/form-data">
ChooseFile: <input type="file" name="file">
<br>
<input type="submit" name="submit" value="Upload">
</form>
<br>
<br>
<button class="button"onclick="window.location.href='showimage.php'">Show images</button>
</body>
</html>
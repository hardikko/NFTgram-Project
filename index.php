<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>how to upload file in mysql database using php - Laratutorials.com</title>
</head>
<body>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <h2>PHP Upload File</h2>
        <label for="file_name">Filename:</label>
        <input type="file" name="anyfile" id="anyfile">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
    </form>
</body>
</html>
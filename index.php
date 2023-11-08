<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload, Download, and Delete</title>
</head>
<body>
    <h1>File Upload</h1>
    <form method="POST" action="upload.php" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Upload">
    </form>

    <h2>Uploaded Files</h2>
    <ul>
        <!-- List of uploaded files will appear here -->
    </ul>

    <script>
        // Fetch and display the list of uploaded files
        fetch('list_files.php')
            .then(response => response.json())
            .then(data => {
                const fileList = document.querySelector('ul');
                data.forEach(fileName => {
                    const listItem = document.createElement('li');
                    listItem.innerHTML = `
                        ${fileName}
                        <a href="download.php?name=${fileName}">Download</a>
                        <a href="delete.php?name=${fileName}" style="color: red;">Delete</a>
                    `;
                    fileList.appendChild(listItem);
                });
            });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL CRUD</title>
    <script>
        document.getElementById("form").addEventListener(e) {
            e.preventDefault();
        }

        function AddField() {
            document.getElementById('add').innerHTML += '<input type="text"><br>'
        }
    </script>
</head>

<body>
    <button id="buttonAdd" onclick="AddField();">Add one more field</button>
    <form action="" method="post" id="form">
        <input type="text" placeholder='Name'><br>
        <div id="add"></div>
        <input type="submit" value='Save'>
    </form>

</body>

</html>
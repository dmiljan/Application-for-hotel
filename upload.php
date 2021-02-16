<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="dropzone/dist/min/dropzone.min.css">
    <script type="text/javascript" src="dropzone/dist/min/dropzone.min.js"></script>

    <link rel="stylesheet" href="styles/table.css">

</head>
<body>
<label><b>Učitaj slike:</b></label>

<form action="upload_check.php" class="dropzone">

</form>
<br>
<button type="button" class="btn" id="btnHome"><i class="fa fa-home"></i> Početna</button>
</body>
<script>
    var btn = document.getElementById('btnHome');
    btn.addEventListener('click', function () {
        document.location.href = 'indexAdmin.php';
    });
</script>
</html>

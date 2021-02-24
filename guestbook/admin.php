<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Admin Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center">Admin</h1>
<nav class="topnav text-center">
    <a class="active" href="admin.php">Home</a>
    <a class="active" href="../resume/resume.html">Resume</a>
    <a class="active" href="guestbook.html">Guestbook</a>
    <a href="https://github.com/zalsamach/portfolio.git">Github</a>
</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

<?php
require 'database.php';
$sql = "SELECT * FROM guests";


$result = @mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result))
{
    $fname = $row['fname'];
    $lname = $row['lname'];
    $jtitle = $row['jtitle'];
    $company = $row['company'];
    $lurl = $row['lurl'];
    $eaddress = $row['eaddress'];
    $met = $row['met'];
    $comment = $row['comment'];

    echo "<p> $fname, $lname, $jtitle, $company, $lurl, $eaddress, $met, $comment</p>";

}
?>




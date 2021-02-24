<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'database.php';


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $jtitle = $_POST['jtitle'];
    $company = $_POST['company'];
    $lurl = $_POST['lurl'];
    $eaddress = $_POST['eaddress'];
    $met = $_POST['met'];
    $comment = $_POST['comment'];

    $fname = mysqli_real_escape_string($conn, $fname);
    $lname = mysqli_real_escape_string($conn, $lname);
    $jtitle = mysqli_real_escape_string($conn, $jtitle);
    $company = mysqli_real_escape_string($conn, $company);
    $lurl = mysqli_real_escape_string($conn, $lurl);
    $eaddress = mysqli_real_escape_string($conn, $eaddress);
    $met = mysqli_real_escape_string($conn, $met);
    $comment = mysqli_real_escape_string($conn, $comment);

    $sql = "INSERT INTO guests (fname, lname, jtitle, company, lurl, eaddress, met, comment)
            VALUES ('$fname', '$lname', '$jtitle', '$company', '$lurl', '$eaddress', '$met', '$comment')";
    $result = @mysqli_query($conn, $sql);
    if (!$result) {
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Submission</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container" id="main">

        <?php
            echo "<h3>Thanks for your submission!</h3>";
        ?>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="validation.js"></script>
</body>
</html>
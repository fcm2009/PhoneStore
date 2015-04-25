<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>The Phone Store - Add a phone to the store</title>
</head>
<body>
    <?php
        $db = mysqli_connect("localhost", "root", "hg,i,l,vh");
        if(!$db) {
            die("error0");
        }

        if(!(mysqli_select_db($db, "ThePhoneStore"))) {
            die("error1");
        }

        $query = "insert into phone values('" . $_POST["id"] ."', '" . $_POST["model"] . "', '" . $_POST["color"] . "', " . $_POST["price"] . ", " . ((int) $_POST["touch"]) . ")";
        if(!($result = mysqli_query($db, $query))) {
            die("error2");
        }
    ?>
</body>
</html>
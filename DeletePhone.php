<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>The Phone Store - Delete a phone</title>
</head>
<body>
    <h1>Phone Information</h1>
    <?php
        $db = mysqli_connect("localhost", "root", "root");
        if(!$db) {
            die("<h1>Error</h1>
                <h2>Can not connect to the server. Try again later</h2>");
        }

        if(!(mysqli_select_db($db, "ThePhoneStore"))) {
            die("<h1>Error</h1>
                <h2>Can not find the database. Try again later</h2>");
        }

        $query = "delete from phone where id = '" . $_POST["id"] ."';";
        if(!($result = mysqli_query($db, $query))) {
            die("<h1>Error</h1>
                <p>Bad request. Try again later</p>");
        }

        print("<h1>congratulations</h1>
                <p>Phone " . $_POST["id"] . " has been removed from the store</p>");
    ?>
</body>
</html>
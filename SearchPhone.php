<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>The Phone Store - Search for a phone</title>
</head>
<body>
    <h1>Phone Information</h1>
    <?php
        $db = mysqli_connect("localhost", "a4595078_root", "a4595078_root");
        if(!$db) {
            die("<h1>Error</h1>
                <h2>Can not connect to the server. Try again later</h2>");
        }

        if(!(mysqli_select_db($db, "a4595078_db"))) {
            die("<h1>Error</h1>
                <h2>Can not find the database. Try again later</h2>");
        }

        $query = "select * from phone where id = '" . $_POST["id"] ."';";
        if(!($result = mysqli_query($db, $query))) {
            die("<h1>Error</h1>
                <h2>Bad request. Try again later</h2>");
        }

        print("<h1>Search result</h1>");

        print("<table border='1'>");
        print("<tr>");
        print("<th>ID</th><th>Model</th><th>Color</th><th>Price</th><th>Touch Support</th>");
        print("</tr>");
        foreach($result as $row) {
            print("<tr>");
            foreach($row as $key => $value) {
                    print("<td>" . $value . "</td>");
            }
            print("</tr>");
        }
        print("</table>");
    ?>
</body>
</html>
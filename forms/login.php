<?php 
session_start();

if (isset($_POST["login"])) {
        $uname = $_POST["uname"];
        $pass = md5($_POST["pass"]); // Consider using a more secure hashing algorithm

        $query = "SELECT * FROM seller WHERE Username = '$uname' AND Password = '$pass'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION["Seller_ID"] = $row['Seller_ID'];
          echo "<script>window.location.href = 'home.php?id=';</script>";
            exit;
        } else {
            echo '<p style="color: red;">Login failed. Incorrect username or password</p>';
        }
    }

?>

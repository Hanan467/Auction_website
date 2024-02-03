<?php
if(isset($_POST["register"])){
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $pass = md5($_POST["password"]);
    $conf = md5($_POST["confirm_password"]);
    $address = $_POST["address"];
    $phone = $_POST["phone_no"];
    $org_name = $_POST["orgname"];
   if($conf==$pass){
    $query = "INSERT INTO seller(Organizarion_Name,Username,Password,Email,Address,phone_no) VALUES('$org_name','$uname','$pass','$email','$address','$phone')";

    try{
    mysqli_query($conn,$query);
    echo "Welcome you have registered succesfully!";
    }
    catch(mysqli_sql_exception){
        echo "Something went wrong";
    }
}
else{
    echo '<p style="color: red;">password mismatch!<p>';
}
}
?>
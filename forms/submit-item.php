<?php
// Include the database configuration file  
require_once 'conn.php'; 
include("login.php");
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    /*if(isset($_SESSION["Seller_ID"])) {
    $seller_id = $_SESSION["Seller_ID"];
    // Rest of the code that uses $seller_id
} else {
    echo "User not logged in.";
}*/

    //$seller_id = $_SESSION["Seller_ID"];
    $item_name = $_POST["item-name"];
    $category = $_POST["category"];
    $description = $_POST["description"];
    $current_state = $_POST["current-state"];
    $starting_price = $_POST["starting-price"];
    $auction_type = $_POST["auction-type"];
    $start_date = $_POST["start-date"];
    $end_date = $_POST["end-date"];

        // Get file info 
        $img = $_FILES["image"]["name"]; 
        //$fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
      //  $allowTypes = array('jpg','png','jpeg','gif'); 
       // if(in_array($fileType, $allowTypes)){ 
            //$image = $_FILES['image']['tmp_name']; 
            //$imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
           
$query = "INSERT into item (Seller_Id,Item_Name,description,category,starting_price,Item_condition,image,start_date,end_date) VALUES ('$seller_id','$item_name','$description','$category','$starting_price','$current_state','$img','$start_date','$end_date')";
            $insert = mysqli_query($conn,$query);
            if($insert){ 
                move_uploaded_file($_FILES['image']['tmp_name'],"picture/$img"); 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }
    
 
// Display status message 
echo $statusMsg; 
?>
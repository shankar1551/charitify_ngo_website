<?php

 include("./isLoggedIn.php");
 require_once "./config.php";

# Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{


    if(isset($_POST["delete_msg"]))
    { 

            $id = $_POST["delete_msg"];
            $sql= "delete from messages where id={$id}";
            if (mysqli_query($link, $sql))
            {
               $_SESSION["session_message_success"] = "Message Delete Successfully";
            }
             else {
                $_SESSION["session_message_error"] = "Error: " . $sql . "<br>" . mysqli_error($link);
            }
          header("Location:./messages.php");
    }
    else if(isset($_POST["delete_blog"]))
    {
            $id = $_POST["delete_blog"];
            $sql= "delete from blogs where id={$id}";

            if (mysqli_query($link, $sql))
            {
               $_SESSION["session_message_success"] = "Blog Delete Successfully";
            }
             else {
                $_SESSION["session_message_error"] = "Error: " . $sql . "<br>" . mysqli_error($link);
            }
            header("Location:./blogs.php");
    }

    else if(isset($_POST["delete_career"]))
    {
          $id = $_POST["delete_career"];
            $sql= "delete from career where id={$id}";

            if (mysqli_query($link, $sql))
            {

               $_SESSION["session_message_success"] = "Blog Delete Successfully";
            }
             else {
                $_SESSION["session_message_error"] = "Error: " . $sql . "<br>" . mysqli_error($link);
            }
            header("Location:./career.php");

    }
    else if(isset($_POST["delete_gallery"])){
       $id = $_POST["delete_gallery"];
            $sql= "delete from gallery where id={$id}";

            if (mysqli_query($link, $sql))
            {

               $_SESSION["session_message_success"] = "Blog Delete Successfully";
            }
             else {
                $_SESSION["session_message_error"] = "Error: " . $sql . "<br>" . mysqli_error($link);
            }
            header("Location:./gallery.php");



    }

}
 ?>

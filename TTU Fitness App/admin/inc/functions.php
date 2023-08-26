<?php
//include("database.php");
// database details
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "ttu_fitness_app";
$con = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to the database: " . mysqli_connect_error();
}

class functions
{

    function login($username, $email, $password)
    {
        // Getting username/ email and password
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Fetch data from database on the basis of username/email and password
        $sql = mysqli_query($con, "SELECT username,email,password FROM admin WHERE (username='$username' || email='$username')");
        $num = mysqli_fetch_array($sql);

        if ($num > 0) {
            $verifyPassword = $num['password']; // Hashed password fetching from database
            //verifying Password
            if ($verifyPassword == $_POST['password']) {
                $_SESSION['login'] = $_POST['username'];
                echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
            } else {
                echo "<script>alert('Sorry! Your Username Or Password is not registered');</script>";
            }
        }

        //if username or email not found in database
        else {
            echo "<script>alert('Sorry! Your Username Or Password is not registered');</script>";
        }
    }

   function add_member(){
    //member data declaration
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $goal = $_POST['subcategory'];
    $phoneNo = $_POST['phoneNo'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $img = $_POST['img'];
    $status = "active";
 
    if(isset($_POST["registerMember"])){
        
        //member img file
        $imgfile = $_FILES["postimage"]["name"];

        // get the image extension
        $extension = substr($imgfile, strlen($imgfile) - 4, strlen($imgfile));

        // allowed extensions
        $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");

        // Validation for allowed extensions .in_array() function searches an array for a specific value.
        if (!in_array($extension, $allowed_extensions)) {
            echo "<script>alert('Only jpg / jpeg/ png /gif format is allowed');</script>";
        } else {
            //rename the image file
            $imgnewfile = md5($imgfile) . $extension;


            $status = 1;
            $query = mysqli_query($con, "insert into tblposts
             (PostTitle,CategoryId,SubCategoryId,PostDetails,PostUrl,Is_Active,PostImage)
              values('$posttitle','$catid','$subcatid','$postdetails','$url','$status','$imgnewfile')");
            if ($query) {
                // Code for move image into directory
                move_uploaded_file($_FILES["postimage"]["tmp_name"], "postimages/" . $imgnewfile);
                $msg = "Post successfully sent ";
            } else {
                // $error= mysqli_error($con,$query);
                $error = "You Have Violeted Some Of The Rules In Your Article Details . Please try again.";
            }
        }
    }

   }
}

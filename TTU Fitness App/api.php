<?php
session_start();
//including the database connection
include("./db_connect.php");
//User Login Authentication
//User Login Authentication
if (isset($_POST["signin"]) && $_POST["signin"] == "signin") {

    $email = $_POST["mail"];
    $password = $_POST["pass"];
    $role = $_POST["role"];

    

    // Construct the query using user inputs directly (not recommended for security reasons)
    $users_query = "SELECT * FROM `users` WHERE email='$email' AND password='$password' AND role='admin'";
    $member_query = "SELECT * FROM `users` WHERE email='$email' AND password='$password' AND role='member'";
    $trainer_query = "SELECT * FROM `users` WHERE email='$email' AND password='$password' AND role='trainer'";
    

    $users_result = mysqli_query($conn, $users_query);
    $member_result = mysqli_query($conn, $member_query);
    $trainer_result = mysqli_query($conn, $trainer_query);

    if ($users_result) {
        $users_row = mysqli_fetch_assoc($users_result);

        if ($users_row) {
            $_SESSION["mail"] = $users_row["email"];
            // Do not store password in session
            $response = [
                'status' => 200,
                'message' => "User login successful"
            ];
      
        }else if($member_result) {
            $member_row = mysqli_fetch_assoc($member_result);
    
            if ($member_row) {
                $_SESSION["mail"] = $member_row["email"];
                // Do not store password in session
                $response = [
                    'status' => 300,
                    'message' => "User login successful"
                ];
          
            }else if ($trainer_result) {
                $trainer_row = mysqli_fetch_assoc($trainer_result);
        
                if ($trainer_row) {
                    $_SESSION["mail"] = $trainer_row["email"];
                    // Do not store password in session
                    $response = [
                        'status' => 400,
                        'message' => "User login successful"
                    ];
              
                } else {
                 $response = [
                'status' => 401,
                'message' => "Unable to login"
            ];
        }
    }
}

        mysqli_free_result($users_result);
    } else {
        $response = [
            'status' => 500,
            'message' => "Database query error: " . mysqli_error($conn)
        ];
    }

    header('Content-type: application/json');
    echo json_encode($response);
}

//admin Login Authentication
//admin Login Authentication
if (isset($_POST["adminSignin"]) && $_POST["adminSignin"] == "adminSignin") {
    
    $email = $_POST["mail"];
    $password = $_POST["pass"];

    // Construct the query using user inputs directly (not recommended for security reasons)
    $users_query = "SELECT * FROM `users` WHERE email='$email' AND password='$password' AND role='admin'";

    $users_result = mysqli_query($conn, $users_query);

    if ($users_result) {
        $users_row = mysqli_fetch_assoc($users_result);

        if ($users_row) {
            $_SESSION["mail"] = $users_row["email"];
            // Do not store password in session

            $response = [
                'status' => 200,
                'message' => "User login successful"
            ];
        } else {
            $response = [
                'status' => 401,
                'message' => "Unable to login"
            ];
        }

        mysqli_free_result($users_result);
    } else {
        $response = [
            'status' => 500,
            'message' => "Database query error: " . mysqli_error($conn)
        ];
    }

    header('Content-type: application/json');
    echo json_encode($response);
}

//member Login Authentication
//member Login Authentication
if (isset($_POST["memberSignin"]) && $_POST["memberSignin"] == "memberSignin") {
    
    $email = $_POST["mail"];
    $password = $_POST["pass"];

    // Construct the query using user inputs directly (not recommended for security reasons)
    $users_query = "SELECT * FROM `users` WHERE email='$email' AND password='$password' AND role='admin'";

    $users_result = mysqli_query($conn, $users_query);

    if ($users_result) {
        $users_row = mysqli_fetch_assoc($users_result);

        if ($users_row) {
            $_SESSION["mail"] = $users_row["email"];
            // Do not store password in session

            $response = [
                'status' => 200,
                'message' => "User login successful"
            ];
        } else {
            $response = [
                'status' => 401,
                'message' => "Unable to login"
            ];
        }

        mysqli_free_result($users_result);
    } else {
        $response = [
            'status' => 500,
            'message' => "Database query error: " . mysqli_error($conn)
        ];
    }

    header('Content-type: application/json');
    echo json_encode($response);
}

if(isset($_POST["register"])) {
    // Retrieve data from the AJAX request
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $exampleSelect = $_POST["role"];
    $phoneNumber = $_POST["phoneNumber"];
    $gender = $_POST["gender"];
    $username = $_POST["username"];
    $email = $_POST["mail"];
    $rawPassword = $_POST["pas"]; // Raw password before hashing
    $CPassword = $_POST["CPassword"];
    $profile =$_POST["profile"];
    $date = date("Y-m-d");


    // Hash the password
    $hashedPassword = password_hash($rawPassword, PASSWORD_DEFAULT);

    // Insert user data into the database
    $insert = mysqli_query($conn, "INSERT INTO registeration (first_name, last_name, `role`, phone_number, gender, username, email, `password`,`registration_date`,`profile`) VALUES ('$fName','$lName','$exampleSelect','$phoneNumber','$gender','$username','$email','$hashedPassword','$date','$profile')");

    if($insert){
        $response =[
            'status' =>200,
            'message' =>'registration successful'
        ];


    // Send the response back to the AJAX request
    header("Content-Type: application/json");
    echo json_encode($response);
}

}

//admin side user regiteration
//admin side user regiteration
if(isset($_POST["registermember"])) {
    // Retrieve data from the AJAX request
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $exampleSelect = $_POST["role"];
    $phoneNumber = $_POST["phoneNumber"];
    $gender = $_POST["gender"];
    $username = $_POST["username"];
    $email = $_POST["mail"];
    $rawPassword = $_POST["pas"]; // Raw password before hashing
    $CPassword = $_POST["CPassword"];
    $profile =$_POST["profile"];
    $status = "Active";
    $delete_status = "Not Deleted";
    $date = date("Y-m-d");


    // Hash the password
    $hashedPassword = password_hash($rawPassword, PASSWORD_DEFAULT);

    // Insert user data into the database
    $insert = mysqli_query($conn, "INSERT INTO registeration (first_name, last_name, `role`, phone_number, gender, username, email, `password`,`registration_date`,`profile`,  `status`,delete_status) VALUES ('$fName','$lName','$exampleSelect','$phoneNumber','$gender','$username','$email','$hashedPassword','$date','$profile','$status','$delete_status')");

    if($insert){
        $response =[
            'status' =>200,
            'message' =>'registration successful'
        ];


    // Send the response back to the AJAX request
    header("Content-Type: application/json");
    echo json_encode($response);
}

}

//admin side plan regiteration
//admin side plan regiteration
if(isset($_POST["planregister"])) {
    // Retrieve data from the AJAX request
    $id = $_POST["id"];
    $pName = $_POST["pName"];
    $duration = $_POST["duration"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $delete_status = "Not Deleted";
    $date = date("Y-m-d");

    // Insert user data into the database
    $insert = mysqli_query($conn, "INSERT INTO plan (plan_id, plan_name, duration, `price`, `description` ,`date` ,delete_status) VALUES ('$id', '$pName','$duration','$price','$description','$date','$delete_status')");

    if($insert){
        $response =[
            'status' =>200,
            'message' =>'registration successful'
        ];


    // Send the response back to the AJAX request
    header("Content-Type: application/json");
    echo json_encode($response);
}
}

//admin side equipmet regiteration
//admin side equipment regiteration
if(isset($_POST["registerEqipment"])) {
    // Retrieve data from the AJAX request
    $toolName = $_POST["toolName"];
    $toolType = $_POST["toolType"];
    $condition = $_POST["condition"];
    $price = $_POST["price"];
    $manufacturer = $_POST["manufacturer"];
    $purchaseDate = $_POST["purchaseDate"];
    $usageInstructions = $_POST["usageInstructions"];
    $delete_status = "Not Deleted";
    $date = date("Y-m-d");

    // Insert user data into the database
    $insert = mysqli_query($conn, "INSERT INTO tools (tool_name, tool_type, price, `e_condition`, `manufacturer` ,`purchase_date` ,usage_instructions,created_at,delete_status) VALUES ('$toolName', '$toolType','$price','$condition','$manufacturer','$purchaseDate','$usageInstructions','$date','$delete_status')");

    if($insert){
        $response =[
            'status' =>200,
            'message' =>'registration successful'
        ];


    // Send the response back to the AJAX request
    header("Content-Type: application/json");
    echo json_encode($response);
}
}

//fetchng registeration details
//fetchng registeration details
if(isset($_GET["operation"])){
    //Selecl query
    $select_query= mysqli_query($conn, "SELECT * FROM registeration WHERE delete_status = 'Not Deleted'");

    if(mysqli_num_rows($select_query) > 0){
        $response = [
            'status' => 200,
            'message' => 'data fetched successfull',
            'data' => []
        ];

        while($row = mysqli_fetch_assoc($select_query)) {
            $response["data"][] = [
                'id' => $row["id"],
                'username' => $row["username"],
                'role' => $row["role"],
                'phone_number' => $row["phone_number"],
                'gender' => $row["gender"],
                'email' => $row["email"],
                'status' => $row["status"],
                'registration_date' => $row["registration_date"],
            ];
        }
        
    }

       // Send the response back to the AJAX request
       header("Content-Type: application/json");
       echo json_encode($response);
}


if(isset($_GET["planoperation"])){
    //Selecl query
    $select_query= mysqli_query($conn, "SELECT * FROM plan WHERE delete_status = 'Not Deleted'");

    if(mysqli_num_rows($select_query) > 0){
        $response = [
            'status' => 200,
            'message' => 'data fetched successfull',
            'data' => []
        ];

        while($row = mysqli_fetch_assoc($select_query)) {
            $response["data"][] = [
                'id' => $row["id"],
                'plan_id' => $row["plan_id"],
                'plan_name' => $row["plan_name"],
                'duration' => $row["duration"],
                'price' => $row["price"],
                'date' => $row["date"],
            ];
        }
        
    }

       // Send the response back to the AJAX request
       header("Content-Type: application/json");
       echo json_encode($response);
}

/*--- start of fetchng plan details ---*/
/*--- start of fetchng plan details ---*/

//fetchng member plan details
//fetchng member plan details
if (isset($_GET["membersplan"])) {
    $id = $_GET["details_id"];

    $select_query = mysqli_query($conn, "SELECT * FROM plan WHERE id = '$id'");
    
    if (mysqli_num_rows($select_query) > 0) {
        $response = [
            'status' => 200,
            'message' => 'data fetched successfully',
            'data' => []
        ];

        while ($row = mysqli_fetch_assoc($select_query)) {
            $response["data"][] = [
                'id' => $row["id"],
                'plan_id' => $row["plan_id"],
                'plan_name' => $row["plan_name"],
                'duration' => $row["duration"],
                'price' => $row["price"],
                'date' => $row["date"],
            ];
        }
    } else {
        $response = [
            'status' => 404,
            'message' => 'No plan found'
        ];
    }

    // Send the response back to the AJAX request
    header("Content-Type: application/json");
    echo json_encode($response);
} 
//checking if user_id exist in the registration table
//checking if user_id exist in the registration table
elseif (isset($_GET["check_user"])) {
    $user_id = $_GET["user_id"];

    // Check if user exists in the registration table
    $select_query = mysqli_query($conn, "SELECT id FROM registeration WHERE id = '$user_id' LIMIT 1");
    
    $userExists = mysqli_num_rows($select_query) > 0;

    $userResponse = [
        'status' => 200,
        'exists' => $userExists
    ];

    // Send the user response back to the AJAX request
    header("Content-Type: application/json");
    echo json_encode($userResponse);
}
//checking if the member has already register for that plan
//checking if the member has already register for that plan
elseif (isset($_GET["user_existence"])) {
    $user_id = $_GET["user_id"];
    $id = $_GET["id"];

    // Check if user exists in the registration table
    $select_query = mysqli_query($conn, "SELECT * FROM member_plan WHERE user_id = '$user_id'  AND id='$id'" );
    
    $userExists = mysqli_num_rows($select_query) > 0;
    if($userExists){
        $response = [
            'status' => 200,
            'exists' => $userExists
        ];

        // Send the user response back to the AJAX request
    header("Content-Type: application/json");
    echo json_encode($response);
    }

    
}
//posting the plane details
elseif(isset($_POST["memberplanadd"])) {
  

    // Retrieve data from the AJAX request
    $user_id = $_POST["user_id"];
    $id = $_POST["id"];
    $pName = $_POST["pName"];
    $duration = $_POST["duration"];
    $price = $_POST["price"];
    $delete_status = "Not Deleted";
    $date = date("Y-m-d");
    $status ="Pending";


        // Insert user data into the database
    $insert = mysqli_query($conn, "INSERT INTO member_plan (id, user_id, plan_name, duration, `price`, `date` ,delete_status,`status`) VALUES ('$id','$user_id', '$pName','$duration','$price','$date','$delete_status','$status')");

    if($insert){
        $response =[
            'status' =>200,
            'message' =>'registration successful'
        ];


    // Send the response back to the AJAX request
    header("Content-Type: application/json");
    echo json_encode($response);
}
    
}
/*--- end of fetchng plan details ---*/
/*--- end of fetchng plan details ---*/




/*--- -- START ------*/
/*-----  START -----*/

//fetchng member payment details
//fetchng member payment details
if (isset($_GET["membersplanpayment"])) {
    $id = $_GET["details_id"];

    $select_query = mysqli_query($conn, "SELECT * FROM plan WHERE id = '$id'");
    
    if (mysqli_num_rows($select_query) > 0) {
        $response = [
            'status' => 200,
            'message' => 'data fetched successfully',
            'data' => []
        ];

        while ($row = mysqli_fetch_assoc($select_query)) {
            $response["data"][] = [
                'id' => $row["id"],
                'plan_id' => $row["plan_id"],
                'plan_name' => $row["plan_name"],
                'duration' => $row["duration"],
                'price' => $row["price"],
                'date' => $row["date"],
            ];
        }
    } else {
        $response = [
            'status' => 404,
            'message' => 'No plan found'
        ];
    }

    // Send the response back to the AJAX request
    header("Content-Type: application/json");
    echo json_encode($response);
} 

//checking if the member has already register for that plan
//checking if the member has already register for that plan
if (isset($_GET["fullPayment"])) {
    $amount = $_GET["amount"];
    $price = $_GET["price"];
    $id = $_GET["id"];
    $user_id=$_GET["user_id"];

    // Check if user has make full payment 
    $select_query = mysqli_query($conn, "SELECT * FROM payment WHERE plan_id = '$id'  AND user_id ='$user_id' '" );

    $userExists = mysqli_num_rows($select_query) > 0;

    if($userExists){
            $response = [
                'status' => 500,
                'exists' => $userExists
            ];
    
            // Send the user response back to the AJAX request
        header("Content-Type: application/json");
        echo json_encode($response);
        }
}

    


//checking if the member has subscribe for the plan
//checking if the member has subscribe to the plan
if (isset($_GET["checkSubscription"])) {
    $user_id = $_GET["user_id"];
    $id = $_GET["id"];

    // Check if user has register for the plan
    $select_query = mysqli_query($conn, "SELECT * FROM member_plan WHERE id = '$id'  AND user_id ='$user_id'" );

    $userExists = mysqli_num_rows($select_query) > 0;
    if($userExists){
            $response = [
                'status' => 200,
                'exists' => $userExists
            ];

    // Send the response back to the AJAX request
    header("Content-Type: application/json");
    echo json_encode($response);
    
    }
}
//posting the plane details
elseif(isset($_POST["paymentadd"])) {
  

    // Retrieve data from the AJAX request
    $user_id = $_POST["user_id"];
    $amount = $_POST["amount"];
    $id = $_POST["id"];
    $pName = $_POST["pName"];
    $duration = $_POST["duration"];
    $price = $_POST["price"];
    $delete_status = "Not Deleted";
    $date = date("Y-m-d");
  


        // Insert user data into the database
    $insert = mysqli_query($conn, "INSERT INTO payment (plan_id, user_id, amount, plan_name, duration, `price`, `date` ,delete_status) VALUES ('$id','$user_id','$amount', '$pName','$duration','$price','$date','$delete_status')");

    if($insert){
        $response =[
            'status' =>200,
            'message' =>'registration successful'
        ];


    // Send the response back to the AJAX request
    header("Content-Type: application/json");
    echo json_encode($response);
}
    
}
/*--- END ---*/
/*--- END ---*/




//fetchng equipments details
//fetchng equipments details
if(isset($_GET["equipmentoperation"])){
    //Selecl query
    $select_query= mysqli_query($conn, "SELECT * FROM tools WHERE delete_status = 'Not Deleted'");

    if(mysqli_num_rows($select_query) > 0){
        $response = [
            'status' => 200,
            'message' => 'data fetched successfull',
            'data' => []
        ];

        while($row = mysqli_fetch_assoc($select_query)) {
            $response["data"][] = [
                'id' => $row["id"],
                'tool_name' => $row["tool_name"],
                'tool_type' => $row["tool_type"],
                'price' => $row["price"],
                'e_condition' => $row["e_condition"],
                'purchase_date' => $row["purchase_date"],
                'manufacturer' => $row["manufacturer"],
                'created_at' => $row["created_at"],
            ];
        }
        
    }

       // Send the response back to the AJAX request
       header("Content-Type: application/json");
       echo json_encode($response);
}

//updating the user status
//updating the user status
if(isset($_POST["statusUpdate"])){
    $status = $_POST["status_id"];

    $update = "UPDATE registeration SET status = CASE WHEN status = 'Active' THEN 'Inactive' WHEN status = 'Inactive' THEN 'Active' END WHERE id = '$status'";
    $query = mysqli_query($conn, $update);

    if ($query) {
        $response = [
            'status' => 200,
            'message' => 'data fetched successfull',
          
        ];
    } else {
        $response = [
            'status' => 404,
            'message' => 'data fetched successfull',
        ];
    }

    
       // Send the response back to the AJAX request
       header("Content-Type: application/json");
       echo json_encode($response);
}

// Handle fetch operation
if (isset($_GET['edituser'])){
    // Assuming you have a way to fetch user data from your database
    $user_edit = $_GET['user_edit'];
    
    $sql = "SELECT * FROM registeration WHERE id = $user_edit"; // Modify this query according to your table structure
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $userData = mysqli_fetch_assoc($result);
        $response = [
            'status' => 200,
            'data' => $userData
        ];
    } else {
        $response = [
            'status' => 404,
            'message' => 'User not found'
        ];
    }

   // Send the response back to the AJAX request
   header("Content-Type: application/json");
   echo json_encode($response);
}

// Handle registration/update operation
if (isset($_POST['adminregister'])) {
    // Assuming you have a way to register/update user data in your database
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $role = $_POST['role'];
    $phoneNumber = $_POST['phoneNumber'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $pas = $_POST['pas'];
    $CPassword = $_POST['CPassword'];
    $profile = $_POST['profile'];
    // Other form data...


    // Implement validation, hashing password, and insert/update query

    if ($registrationSuccess) {
        $response = [
            'status' => 200,
            'message' => 'User registered/updated successfully'
        ];
    } else {
        $response = [
            'status' => 500,
            'message' => 'Unable to register/update user'
        ];
    }

     // Send the response back to the AJAX request
     header("Content-Type: application/json");
     echo json_encode($response);
}

//deleting user
//deleting user
if(isset($_POST["userDelete"])){
    $status = $_POST["delete_id"];

    $update = "UPDATE registeration SET delete_status = CASE WHEN delete_status = 'Not Deleted' THEN 'Deleted' WHEN delete_status = 'Deleted' THEN 'Not Deleted' END WHERE id = '$status'";
    $query = mysqli_query($conn, $update);

    if ($query) {
        $response = [
            'status' => 200,
            'message' => 'data fetched successfull',
          
        ];
    } else {
        $response = [
            'status' => 404,
            'message' => 'data fetched successfull',
        ];
    }

    
       // Send the response back to the AJAX request
       header("Content-Type: application/json");
       echo json_encode($response);
}

//deleting plan
//deleting plan
if(isset($_POST["planDelete"])){
    $status = $_POST["delete_id"];

    $update = "UPDATE plan SET delete_status = CASE WHEN delete_status = 'Not Deleted' THEN 'Deleted' WHEN delete_status = 'Deleted' THEN 'Not Deleted' END WHERE id = '$status'";
    $query = mysqli_query($conn, $update);

    if ($query) {
        $response = [
            'status' => 200,
            'message' => 'data fetched successfull',
          
        ];
    } else {
        $response = [
            'status' => 404,
            'message' => 'data fetched successfull',
        ];
    }

    
       // Send the response back to the AJAX request
       header("Content-Type: application/json");
       echo json_encode($response);
}

//deleting equipment
//deleting equipment
if(isset($_POST["equipmentDelete"])){
    $status = $_POST["delete_id"];

    $update = "UPDATE tools SET delete_status = CASE WHEN delete_status = 'Not Deleted' THEN 'Deleted' WHEN delete_status = 'Deleted' THEN 'Not Deleted' END WHERE id = '$status'";
    $query = mysqli_query($conn, $update);

    if ($query) {
        $response = [
            'status' => 200,
            'message' => 'data fetched successfull',
          
        ];
    } else {
        $response = [
            'status' => 404,
            'message' => 'data fetched successfull',
        ];
    }

    
       // Send the response back to the AJAX request
       header("Content-Type: application/json");
       echo json_encode($response);
}


?>
 <?php
     include "inc/header.php";
 ?>

 <body>
     <?php
     include "inc/preloader.php";
    ?>

     <!-- ***** Navigation Area Start ***** -->
     <?php
     include "inc/nav.php";
    ?>
     <!-- ***** Navigation Area End ***** -->

     <!-- ***** Main Banner Area Start ***** -->
     <?php
     include "inc/banner.php";
    ?>
     <!-- ***** Main Banner Area End ***** -->

     <!-- ***** Features Item Start ***** -->
     <?php
     include "inc/items.php";
    ?>
     <!-- ***** Features Item End ***** -->

     <!-- ***** Member or Trainer login Start ***** -->
     <?php
     include "inc/member_trainer.php";
    ?>
     <!-- ***** Member or Trainer login End ***** -->

     <!-- ***** Training Sections Start ***** -->
     <?php
     include "inc/items.php";
    ?>
     <!-- ***** Training Sections End ***** -->

     <!-- ***** Training Shedules Start ***** -->
     <?php
     include "inc/shedules.php";
    ?>
     <!-- ***** Training shedules End ***** -->

     <!-- ***** Testimonials Starts ***** -->
     <?php
     include "inc/testimony.php";
    ?>
     <!-- ***** Testimonials Ends ***** -->

     <!-- ***** Contact Us Area Starts ***** -->
     <?php
     include "inc/contact.php";
    ?>
     <!-- ***** Contact Us Area Ends ***** -->

     <!-- ***** Footer Start ***** -->
     <?php
     include "inc/footer.php";
    ?>
     <?php
     include "inc/script.php";
    ?>
    
     <!-- Login Modal Form -->
     <form action="#" method="post">
         <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">

                         <div class="position-relative form-group">
                             <label for="exampleEmail11" class="">Username/Email</label>
                             <input name="email" id="mail" placeholder="with a placeholder" type="text"
                                 required class="form-control">
                         </div>
                         <div class="position-relative form-group">
                             <label for="exampleEmail11" class="">Password</label>
                             <input name="password" required id="pass" placeholder="input your password here"
                                 type="password" class="form-control">
                         </div>

                         <div class="position-relative  form-group">
                             <label for="role" class="col-sm-2 col-form-label ">
                                 Select</label><br>
                             <div class="">
                                 <select name="select" id="role" class="form-control">
                                     <option value="">Choose from here</option>
                                     <option value="admin">admin</option>
                                     <option value="trainer">trainer</option>
                                     <option value="member">member</option>
                                 </select>
                             </div>
                         </div>

                         <button id="signin" class="mb-2 mr-2  border-0 btn-transition btn btn-outline-primary btn-lg btn-block"
                             style="alignment:center;">
                             Register</button>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-info" data-toggle="modal"
                             data-target="#registrationModal">
                             Sign Up Here</button>
                     </div>
                 </div>
             </div>
         </div>
     </form>

     <!-- Registration Modal form -->
     <form action="#" method="" enctype="multipart/form-data">
         <!-- Modal -->
         <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel" style="color: green;">Register With Us</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="main-card mb-3 card">
                                     <div class="card-body">
                                         <h5 class="card-title">Personal Details</h5>
                                         <div>
                                             <div class="input-group">
                                                 <div class="position-relative form-group">
                                                     <label  for="fName" class="">First Name</label>
                                                     <input name="text" required id="fName"
                                                         placeholder="Enter first name" type="text"
                                                         class="form-control">
                                                 </div>
                                                 <div class="position-relative form-group">
                                                     <label for="lName" class="">Last Name</label>
                                                     <input name="text" required id="lName"
                                                         placeholder="Enter Last name" type="text" class="form-control">
                                                 </div>

                                                 <div class="position-relative row form-group">
                                                     <div class="col-sm-10">
                                                         <label for="exampleSelect" class="">Category</label>
                                                         <select name="select" id="role" class="form-control">
                                                             <option value="">-- Select Role--</option>
                                                             <option value="admin">Admin</option>
                                                             <option value="member">Member</option>
                                                             <option value="trainer">Trainer</option>
                                                         </select>
                                                     </div>
                                                 </div>

                                                 <div class="position-relative form-group">
                                                     <label for="phoneno" class="">Phone No</label>
                                                     <input name="text" required id="phoneNumber"
                                                         placeholder="Telephone number" type="phone"
                                                         class="form-control">
                                                 </div>
                                                 <div class="position-relative form-group">
                                                     <label for="exampleSelect" class="">Gender</label>
                                                     <select name="select" id="gender" class="form-control">
                                                         <option value="">Choose Gender</option>
                                                         <option value="Male">Male</option>
                                                         <option value="Female">Female</option>
                                                     </select>
                                                 </div>

                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="main-card mb-3 card">
                                     <div class="card-body">
                                         <h5 class="card-title">Login Details</h5>
                                         <div>
                                             <div class="input-group input-group-lg">
                                                 <div class="position-relative form-group">
                                                     <label for="username" class="">Username</label>
                                                     <input name="text" required id="username"
                                                         placeholder="Enter username" type="username"
                                                         class="form-control">
                                                 </div>
                                                 <div class="position-relative form-group">
                                                     <label for="email" class="">Email</label>
                                                     <input name="email" required id="mail" placeholder="Enter email"
                                                         type="email" class="form-control">
                                                 </div>
                                                 <div class="position-relative form-group">
                                                     <label for="password" class="">Password</label>
                                                     <input name="password" required id="pas"
                                                         placeholder="Enter password" type="password"
                                                         class="form-control">
                                                 </div>
                                                 <div class="position-relative form-group">
                                                     <label for="Cpassword" class="">Confirm Password</label>
                                                     <input name="Cpassword" required id="CPassword"
                                                         placeholder="Confirm password" type="Cpassword"
                                                         class="form-control">
                                                 </div>
                                                 <div class="position-relative form-group"><label for="exampleFile"
                                                         class="">Upload Profile</label>
                                                        <input name="file"
                                                         id="profile"  name="profile" type="file" class="form-control-file">
                                                     <small class="form-text text-muted">Select from the above to upload
                                                         your profile picture here.</small>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                             <button id="register" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-primary btn-lg btn-block"
                                 style="alignment:center;">
                                 Register</button>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                         </div>
                     </div>
                 </div>
             </div>
     </form>
     <script type="text/javascript" src="assets/scripts/main.js"></script>
     <script src="../assets/jquery.js"></script>
	<script src="../assets/sweetalert.min.js"></script>
	<script src="./ajax.js"></script>
 </body>

 </html>
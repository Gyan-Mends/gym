//User login autentication
//User login autentication
$("#signin").click(function (event) {
    //preventing the default behavior of the form
    event.preventDefault()

    //accepting input from the form
    var role = $("#role").val()
    var mail = $("#mail").val()
    var pass = $("#pass").val()

    //asking the user if he really wants to login
    Swal.fire({
        icon: "question",
        title: "Are your sure to submit the form",
        showConfirmButton: true,
        confirmButtonText: "Yhep",
        showCancelButton: true,
        cancelButtonText: "Nhop",
    }).then(function (result) {
        if (result.isConfirmed) {
            if (role == "" || mail == "" || pass == "") {
                Swal.fire({
                    icon: "error",
                    title: "All input fields are required",
                    timer: 2000
                })
            } else {
                $.ajax({
                    url: "./api.php",
                    type: "POST",
                    data: {
                        role: role,
                        mail: mail,
                        pass: pass,
                        signin: "signin",
                    },
                    success: function (response) {
                        if (response.status == 200) {
                            //redirecting the admin to the admin dashboard
                            window.location.href = "./admin/dashboard.php"
                        } else if (response.status == 300) {
                            Swal.fire({
                                icon: "error",
                                title: "hii trainer",

                            })
                        } else if (response.status == 400) {
                            //redirecting the trianer to the trainers dashboard
                            window.location.href = "./trainer/pages/home.php"
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Invalid logins",
                                timer: 2000
                            })
                        }
                    }
                })
            }
        }
    })

})

//admin login autentication
//admin login autentication
$("#adminLogin").click(function (event) {
    //preventing the default behavior of the form
    event.preventDefault()

    //accepting input from the form
    var mail = $("#mail").val()
    var pass = $("#pass").val()

    //asking the user if he really wants to login
    Swal.fire({
        icon: "question",
        title: "Are your sure to submit the form",
        showConfirmButton: true,
        confirmButtonText: "Yhep",
        showCancelButton: true,
        cancelButtonText: "Nhop",
    }).then(function (result) {
        if (result.isConfirmed) {
            if (mail == "" || pass == "") {
                Swal.fire({
                    icon: "error",
                    title: "All input fields are required",
                    timer: 2000
                })
            } else {
                $.ajax({
                    url: "../api.php",
                    type: "POST",
                    data: {
                        mail: mail,
                        pass: pass,
                        adminSignin: "adminSignin",
                    },
                    success: function (response) {
                        if (response.status == 200) {
                            //redirecting the admin to the admin dashboard
                            window.location.href = "./dashboard.php"
                        } else if (response.status == 300) {
                            //redirecting the member to the menbers dashboard
                            window.location.href = "#"
                        } else if (response.status == 400) {
                            //redirecting the trainer to the trainers dashboard
                            window.location.href = "#"
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Invalid logins",
                                timer: 2000
                            })
                        }
                    }
                })
            }
        }
    })

})

//member login autentication
//member login autentication
$("#memberSignin").click(function (event) {
    //preventing the default behavior of the form
    event.preventDefault()

    //accepting input from the form
    var mail = $("#mail").val()
    var pass = $("#pass").val()

    //asking the user if he really wants to login
    Swal.fire({
        icon: "question",
        title: "Are your sure to submit the form",
        showConfirmButton: true,
        confirmButtonText: "Yhep",
        showCancelButton: true,
        cancelButtonText: "Nhop",
    }).then(function (result) {
        if (result.isConfirmed) {
            if (mail == "" || pass == "") {
                Swal.fire({
                    icon: "error",
                    title: "All input fields are required",
                    timer: 2000
                })
            } else {
                $.ajax({
                    url: "../api.php",
                    type: "POST",
                    data: {
                        mail: mail,
                        pass: pass,
                        memberSignin: "memberSignin",
                    },
                    success: function (response) {
                        if (response.status == 200) {
                            //redirecting the admin to the admin dashboard
                            window.location.href = "../admin/dashboard.php"
                        } else if (response.status == 300) {
                            //redirecting the member to the menbers dashboard
                            window.location.href = "#"
                        } else if (response.status == 400) {
                            //redirecting the trainer to the trainers dashboard
                            window.location.href = "#"
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Invalid logins",
                                timer: 2000
                            })
                        }
                    }
                })
            }
        }
    })

})

//user registeration
//user registeration
$("#register").click(function (event) {
    event.preventDefault();

    var fName = $.trim($("#fName").val());
    var lName = $.trim($("#lName").val());
    var role = $.trim($("#role").val());
    var phoneNumber = $.trim($("#phoneNumber").val());
    var gender = $.trim($("#gender").val());
    var username = $.trim($("#username").val());
    var mail = $.trim($("#mail").val());
    var pas = $.trim($("#pas").val());
    var CPassword = $.trim($("#CPassword").val());
    var profile = $.trim($("#profile").val());


    if (fName === "" || lName === "" || role === "" || phoneNumber === "" || gender === "" || username === "" || mail === "" || pas === "" || CPassword === "" || profile === "") {
        Swal.fire({
            icon: "error",
            title: "All input fields are required",
            timer: 2000
        });
    } else if (pas !== CPassword) {

        Swal.fire({
            icon: "error",
            title: "Password does not match",
            timer: 2000
        });
    } else {
        console.log("Validation succeeded");
        Swal.fire({
            icon: "question",
            title: "Are you sure you want to submit the form?",
            showConfirmButton: true,
            confirmButtonText: "Yep",
            showCancelButton: true,
            cancelButtonText: "Nope"
        }).then(function (result) {
            if (result.isConfirmed) {
                $.ajax({
                    url: "./api.php",
                    type: "POST",
                    data: {
                        fName: fName,
                        lName: lName,
                        role: role,
                        phoneNumber: phoneNumber,
                        gender: gender,
                        username: username,
                        mail: mail,
                        pas: pas,
                        CPassword: CPassword,
                        profile: profile,
                        register: "register",
                    },
                    success: function (response) {
                        if (response.status == 200) {
                            Swal.fire({
                                icon: "success",
                                title: "User registered successfully",
                                timer: 2000
                            });
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Unable to register user",
                                timer: 2000
                            });
                        }
                    }
                });
            }
        });
    }
});

///admin side member registration
///admin side member registration
$("#adminRegister").click(function (event) {
    //preventing the default behavior of the form
    event.preventDefault()

    Swal.fire({
        title: "Register With Us",
        html: `
            <form id="registrationForm" class="grid grid-cols-2 gap-10 mt-6">
                <div>
                    <h5 class="text-bold"><b>Personal Details</b></h5>
                    <div class="mt-8">
                        <label class="text-left text-sm" style="display: block;">First Name</label>
                        <input class="form-control" type="text" placeholder="First Name" id="fName" required><br>

                        <label class="text-left text-sm" style="display: block;">Last Name</label>
                        <input class="form-control"  type="text" placeholder="Last Name" id="lName" required><br>

                        <label class="text-left text-sm" style="display: block;">Role</label>
                        <select class="form-control"  id="role" required>
                            <option value="">-- Select Role --</option>
                            <option value="admin">Admin</option>
                            <option value="member">Member</option>
                            <option value="trainer">Trainer</option>
                        </select><br>

                        <label class="text-left text-sm" style="display: block;">Phone</label>
                        <input class="form-control"  type="phone" placeholder="Phone No" id="phoneNumber" required><br>

                        <label class="text-left text-sm" style="display: block;">Gender</label>
                        <select class="form-control"  id="gender" required>
                            <option value="">Choose Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div>
                    <h5><b>Login Details</b></h5>
                    <div class="mt-8">
                        <label class="text-left text-sm" style="display: block;">Username</label>
                        <input class="form-control"  type="text" placeholder="Username" id="username" required><br>

                        <label class="text-left text-sm" style="display: block;">Email</label>
                        <input class="form-control"  type="email" placeholder="Email" id="mail" required><br>

                        <label class="text-left text-sm" style="display: block;">Password</label>
                        <input class="form-control"  type="password" placeholder="Password" id="pas" required><br>

                        <label class="text-left text-sm" style="display: block;">Confirm Password</label>
                        <input class="form-control"  type="password" placeholder="Confirm Password" id="CPassword" required><br>

                        <label class="text-left text-sm" style="display: block;">Profile</label>
                        <input class="form-control"  type="file" id="profile">
                    </div>
                </div>
            </form>
        `,
        showCancelButton: true,
        confirmButtonText: "Register",
        cancelButtonText: "Close",
        allowOutsideClick: false,

    }).then(function (result) {
        if (result.isConfirmed) {
            var fName = $.trim($("#fName").val());
            var lName = $.trim($("#lName").val());
            var role = $.trim($("#role").val());
            var phoneNumber = $.trim($("#phoneNumber").val());
            var gender = $.trim($("#gender").val());
            var username = $.trim($("#username").val());
            var mail = $.trim($("#mail").val());
            var pas = $.trim($("#pas").val());
            var CPassword = $.trim($("#CPassword").val());
            var profile = $.trim($("#profile").val());


            if (fName === "" || lName === "" || role === "" || phoneNumber === "" || gender === "" || username === "" || mail === "" || pas === "" || CPassword === "" || profile === "") {
                Swal.fire({
                    icon: "error",
                    title: "All input fields are required",
                    timer: 2000,
                    position: 'top-end'
                });
            } else if (pas !== CPassword) {

                Swal.fire({
                    icon: "error",
                    title: "Password does not match",
                    timer: 2000
                });
            } else {
                console.log("Validation succeeded");
                Swal.fire({
                    icon: "question",
                    title: "Are you sure you want to submit the form?",
                    showConfirmButton: true,
                    confirmButtonText: "Yep",
                    showCancelButton: true,
                    cancelButtonText: "Nope"
                }).then(function (result) {
                    if (result.isConfirmed) {


                        $.ajax({
                            url: "../api.php",
                            type: "POST",
                            data: {
                                fName: fName,
                                lName: lName,
                                role: role,
                                phoneNumber: phoneNumber,
                                gender: gender,
                                username: username,
                                mail: mail,
                                pas: pas,
                                CPassword: CPassword,
                                profile: profile,
                                registermember: "registermember",
                            },
                            success: function (response) {
                                if (response.status == 200) {
                                    Swal.fire({
                                        icon: "success",
                                        title: "User registered successfully",
                                        timer: 2000,
                                        
                                    });
                                } else {
                                    Swal.fire({
                                        icon: "error",
                                        title: "Unable to register user",
                                        timer: 2000
                                    });
                                }
                            }
                        });
                    }
                });
            }
        } else {
            Swal.fire({
                icon: "error",
                title: "Registration has been cancelled",
                timer: 2000
            })
        }
    })


});

///admin side plan registration
///admin side plan registration
$("#addplan").click(function (event) {
    //preventing the default behavior of the form
    event.preventDefault()

    Swal.fire({
        title: "Add New Plan",
        html: `
            <form id="registrationForm" class=" mt-6">
                <div>
                    <div class="mt-8">
                        <label class="text-left text-sm" style="display: block;">Plan id</label>
                        <input class="form-control" type="text" placeholder="Plan Name" id="id" required><br>

                        <label class="text-left text-sm" style="display: block;">Plan Name</label>
                        <input class="form-control" type="text" placeholder="Plan Name" id="pName" required><br>

                        <label class="text-left text-sm" style="display: block;">Duration</label>
                        <input class="form-control"  type="text" placeholder="Plan duration" id="duration" required><br>

                        <label class="text-left text-sm" style="display: block;">Price</label>
                        <input class="form-control"  type="phone" placeholder="Plan price" id="price" required><br>

                        <label class="text-left text-sm" style="display: block;">Decription</label>
                        <textarea class="form-control !h-40"  type="phone" placeholder="Enter plan description here..." id="description" required></textarea><br>


                    </div>
                </div>
            </form>
        `,
        showCancelButton: true,
        confirmButtonText: "Register",
        cancelButtonText: "Close",
        allowOutsideClick: false,

    }).then(function (result) {
        if (result.isConfirmed) {

            var id = $.trim($("#id").val());
            var pName = $.trim($("#pName").val());
            var duration = $.trim($("#duration").val());
            var price = $.trim($("#price").val());
            var description = $.trim($("#description").val());
       
           

            if (id === "" || pName === "" || duration === "" || price === "" || description ==="" ) {
                Swal.fire({
                    icon: "error",
                    title: "All input fields are required",
                    timer: 2000,
                    position: 'top-end'
                });
            } else {
                Swal.fire({
                    icon: "question",
                    title: "Are you sure you want to submit the form?",
                    showConfirmButton: true,
                    confirmButtonText: "Yep",
                    showCancelButton: true,
                    cancelButtonText: "Nope"
                }).then(function (result) {
                    if (result.isConfirmed) {


                        $.ajax({
                            url: "../api.php",
                            type: "POST",
                            data: {
                                id:id,
                                pName: pName,
                                duration: duration,
                                price: price,
                                description: description,
                                planregister: "planregister",
                            },
                            success: function (response) {
                                if (response.status == 200) {
                                    Swal.fire({
                                        icon: "success",
                                        title: "Plane registered successfully",
                                        timer: 2000
                                    });
                                } else {
                                    Swal.fire({
                                        icon: "error",
                                        title: "Unable to register plan",
                                        timer: 2000
                                    });
                                }
                            }
                        });
                    }
                });
            }
        } else {
            Swal.fire({
                icon: "error",
                title: "Registration has been cancelled",
                timer: 2000
            })
        }
    })


});

///admin side member edit
///admin side member edit
function editUser(user_edit) {
    $.ajax({
        url: "../api.php",
        type: "GET",
        data: {
            edituser: "fetch",
            user_edit: user_edit
        },
        success: function (response) {
            if (response.status === 200) {
                const userData = response.data;

                if (userData) {
                     // Assuming you're expecting a single user's data

                    Swal.fire({
                        title: "Edit member details",
                        html: `
                            <form id="registrationForm" class="grid grid-cols-2 gap-10 mt-6">
                                <div>
                                    <h5 class="text-bold"><b>Personal Details</b></h5>
                                    <div class="mt-8">
                                        <label class="text-left text-sm" for="fName"${userData.fName } value="">First Name</label>
                                        <input class="form-control" type="text" placeholder="First Name" id="fName" required><br>
                                        <label class="text-left text-sm" for="lName">Last Name</label>
                                        <input class="form-control" type="text" placeholder="Last Name" id="lName" required><br>
                                        <label class="text-left text-sm" for="role">Role</label>
                                        <select class="form-control" id="role" required>
                                            <option value="">-- Select Role --</option>
                                            <option value="admin">Admin</option>
                                            <option value="member">Member</option>
                                            <option value="trainer">Trainer</option>
                                        </select><br>
                                        <label class="text-left text-sm" for="phoneNumber">Phone</label>
                                        <input class="form-control" type="phone" placeholder="Phone No" id="phoneNumber" required><br>
                                        <label class="text-left text-sm" for="gender">Gender</label>
                                        <select class="form-control" id="gender" required>
                                            <option value="">Choose Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <h5><b>Login Details</b></h5>
                                    <div class="mt-8">
                                        <label class="text-left text-sm" for="username">Username</label>
                                        <input class="form-control" type="text" placeholder="Username" id="username" required><br>
                                        <label class="text-left text-sm" for="mail">Email</label>
                                        <input class="form-control" type="email" placeholder="Email" id="mail" required><br>
                                        <label class="text-left text-sm" for="pas">Password</label>
                                        <input class="form-control" type="password" placeholder="Password" id="pas" required><br>
                                        <label class="text-left text-sm" for="CPassword">Confirm Password</label>
                                        <input class="form-control" type="password" placeholder="Confirm Password" id="CPassword" required><br>
                                        <label class="text-left text-sm" for="profile">Profile</label>
                                        <input class="form-control" type="file" id="profile">
                                    </div>
                                </div>
                            </form>
                        `,
                        showCancelButton: true,
                        confirmButtonText: "Register",
                        cancelButtonText: "Close",
                        allowOutsideClick: false,
                    }).then(function (result) {
                        if (result.isConfirmed) {
                            var fName = $.trim($("#fName").val());
                            var lName = $.trim($("#lName").val());
                            var role = $.trim($("#role").val());
                            var phoneNumber = $.trim($("#phoneNumber").val());
                            var gender = $.trim($("#gender").val());
                            var username = $.trim($("#username").val());
                            var mail = $.trim($("#mail").val());
                            var pas = $.trim($("#pas").val());
                            var CPassword = $.trim($("#CPassword").val());
                            var profile = $.trim($("#profile").val());

                            if (
                                fName === "" || lName === "" || role === "" || 
                                phoneNumber === "" || gender === "" || 
                                username === "" || mail === ""
                            ) {
                                Swal.fire({
                                    icon: "error",
                                    title: "All required fields must be filled",
                                    timer: 2000
                                });
                            } else if (pas !== CPassword) {
                                Swal.fire({
                                    icon: "error",
                                    title: "Password does not match",
                                    timer: 2000
                                });
                            } else {
                                Swal.fire({
                                    icon: "question",
                                    title: "Are you sure you want to update the details?",
                                    showConfirmButton: true,
                                    confirmButtonText: "Yes",
                                    showCancelButton: true,
                                    cancelButtonText: "No"
                                }).then(function (result) {
                                    if (result.isConfirmed) {
                                        $.ajax({
                                            url: "../api.php",
                                            type: "POST",
                                            data: {
                                                userId: user_edit,
                                                fName: fName,
                                                lName: lName,
                                                role: role,
                                                phoneNumber: phoneNumber,
                                                gender: gender,
                                                username: username,
                                                mail: mail,
                                                pas: pas,
                                                CPassword: CPassword,
                                                profile: profile,
                                                adminregister: "adminregister",
                                            },
                                            success: function (response) {
                                                if (response.status === 200) {
                                                    Swal.fire({
                                                        icon: "success",
                                                        title: "User details updated successfully",
                                                        timer: 2000
                                                    });
                                                } else {
                                                    Swal.fire({
                                                        icon: "error",
                                                        title: "Unable to update user details",
                                                        timer: 2000
                                                    });
                                                }
                                            },
                                            error: function () {
                                                Swal.fire({
                                                    icon: "error",
                                                    title: "AJAX request failed",
                                                    timer: 2000
                                                });
                                            }
                                        });
                                    }
                                });
                            }
                        }
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "No user data found",
                        timer: 2000
                    });
                }
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Unable to fetch user data",
                    timer: 2000
                });
            }
        },
        error: function () {
            Swal.fire({
                icon: "error",
                title: "AJAX request failed",
                timer: 2000
            });
        }
    });
}



// Admin side tool registration
// Admin side tool registration
$("#addequipment").click(function (event) {
    // Preventing the default behavior of the form
    event.preventDefault();

    Swal.fire({
        title: "Add New Tool",
        html: `
            <form id="registrationForm" class="grid grid-cols-1 gap-10 mt-6">
                <div>
                    <div class="mt-8">
                        <label class="text-left text-sm" style="display: block;">Tool Name</label>
                        <input class="form-control" type="text" placeholder="Tool Name" id="toolName" required><br>

                        <label class="text-left text-sm" style="display: block;">Tool Type</label>
                        <select class="form-control" id="toolType" required>
                            <option value="">-- Select Tool Type --</option>
                            <option value="Cardio Equipment">Cardio Equipment</option>
                            <option value="Strength Equipment">Strength Equipment</option>
                            <option value="Accessories">Accessories</option>
                        </select><br>

                        <label class="text-left text-sm" style="display: block;">Purchase Price</label>
                        <input class="form-control" type="text" placeholder="Purchase Price" id="price" required><br>

                        <label class="text-left text-sm" style="display: block;">Condition</label>
                        <select class="form-control" id="condition" required>
                            <option value="">-- Select Condition --</option>
                            <option value="New">New</option>
                            <option value="Used">Used</option>
                            <option value="Refurbished">Accessories</option>
                        </select><br>

                        <label class="text-left text-sm" style="display: block;">Manufacturer</label>
                        <input class="form-control" type="text" placeholder="Manufacturer" id="manufacturer" required><br>

                        <label class="text-left text-sm" style="display: block;">Purchase Date</label>
                        <input class="form-control" type="date" id="purchaseDate" required><br>

                        <!-- Add more input fields for other tool details as needed -->
                        <label class="text-left text-sm" style="display: block;">Usage Instructions</label>
                        <textarea class="form-control" id="usageInstructions" placeholder="Usage Instructions" rows="4" required></textarea><br>

                    </div>
                </div>
            </form>
        `,
        showCancelButton: true,
        confirmButtonText: "Add Tool",
        cancelButtonText: "Close",
        allowOutsideClick: false,
    }).then(function (result) {
        if (result.isConfirmed) {
            var toolName = $.trim($("#toolName").val());
            var toolType = $.trim($("#toolType").val());
            var condition = $.trim($("#condition").val());
            var price = $.trim($("#price").val());
            var manufacturer = $.trim($("#manufacturer").val());
            var purchaseDate = $.trim($("#purchaseDate").val());
            var usageInstructions = $.trim($("#usageInstructions").val());
         

            if (toolName === "" || toolType === "" || price === "" || manufacturer === "" || purchaseDate === "" || usageInstructions === ""  || condition === "") {
                Swal.fire({
                    icon: "error",
                    title: "All input fields are required",
                    timer: 2000,
                    position: 'top-end'
                });
            } else {

                Swal.fire({
                    icon: "question",
                    title: "Are you sure you want to add the tool?",
                    showConfirmButton: true,
                    confirmButtonText: "Yes",
                    showCancelButton: true,
                    cancelButtonText: "No"
                }).then(function (result) {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "../api.php", // Adjust the URL as needed
                            type: "POST",
                            data: {
                                toolName:toolName,
                                toolType:toolType,
                                condition:condition,
                                price:price,
                                manufacturer:manufacturer,
                                purchaseDate:purchaseDate,
                                usageInstructions:usageInstructions,
                                registerEqipment:"registerEquipment"
                            },
                            success: function (response) {
                                if (response.status == 200) {
                                    Swal.fire({
                                        icon: "success",
                                        title: "Tool added successfully",
                                        timer: 2000
                                    });
                                } else {
                                    Swal.fire({
                                        icon: "error",
                                        title: "Unable to add tool",
                                        timer: 2000
                                    });
                                }
                            }
                        });
                    }
                });
            }
        } else {
            Swal.fire({
                icon: "error",
                title: "Tool addition has been cancelled",
                timer: 2000
            });
        }
    });
});


// Fetching registration details
// Fetching registration details
function registrationDetails() {
    $.ajax({
        url: "../api.php",
        type: "GET",
        data: {
            operation: "fetch"
        },
        success: function (response) {
            if (response.status === 200) {
                response.data.forEach(item =>{
                    $("#tbody").append(
                        `
                        <div  class="flex   border border-blue-600 shadow-sm  border-4 rounded-md mt-1 text-leftt">
                        <div class="p-2 w-6">${item.id} </div>
                        <div class="p-2 w-20 ">${item.profile}</div>
                        <div class="p-2 w-40 ">${item.username}</div>
                        <div class="p-2 w-10 ">${item.role}</div>
                        <div class="p-2 w-20 ml-4">${item.phone_number}</div>
                        <div class="p-2 w-20">${item.gender}</div>
                        <div class="p-2 w-40 ">${item.email}</div>
                        <div class="p-2 w-20 text-left">${item.registration_date}</div>
                        <div class="p-2 w-20 "><button onclick="updateStatus(${item.id})"   class="p-1 bg-green-100 w-[90px] rounded">${item.status}</button></div>
                        <div class="p-2 w-1/6 text-left flex gap-2">
                            <div>
                            <button onclick="editUser(${item.id})" ><i class="fa fa-edit bg-blue-400 p-2 rounded flex justify-center items-center text-white text-10"></i></button>
                            </div>
                            <div>
                            <button  onclick="deleteUser(${item.id})" ><i class="fa fa-trash bg-red-400 p-2 rounded flex justify-center items-center text-white text-10"></i></button>
                            </div>
                        </div>
                        </div>
                        `
                    );
                });
            } 
        }
    });
}
registrationDetails()

// Fetching plan details
// Fetching plan details
function planDetails() {
    $.ajax({
        url: "../api.php",
        type: "GET",
        data: {
            planoperation: "planoperation"
        },
        success: function (response) {
            if (response.status === 200) {
                response.data.forEach(item =>{
                    $("#plantbody").append(
                        `
                        <div  class="flex   border border-blue-600 shadow-sm  border-4 rounded-md mt-1 text-leftt">
                        <div class="p-2 w-10">${item.id} </div>
                        <div class="p-2 w-20 ">${item.plan_id}</div>
                        <div class="p-2 w-20 ">${item.plane_name}</div>
                        <div class="p-2 w-20 ">${item.duration}</div>
                        <div class="p-2 w-20">${item.price}</div>
                        <div class="p-2 w-20 text-left">${item.date}</div>
                        <div class="p-2 w-1/6 text-left flex gap-2">
                            <div>
                            <button onclick="editplan(${item.id})" ><i class="fa fa-edit bg-blue-400 p-2 rounded flex justify-center items-center text-white text-10"></i></button>
                            </div>
                            <div>
                            <button  onclick="deleteplan(${item.id})" ><i class="fa fa-trash bg-red-400 p-2 rounded flex justify-center items-center text-white text-10"></i></button>
                            </div>
                            <div>
                            <button  onclick="plan(${item.id})" ><i class="fa fa-user bg-green-400 p-2 rounded flex justify-center items-center text-white text-10"></i></button>
                            </div>
                            <div>
                            <button  onclick="planpayment(${item.id})" ><i class="fa fa-hand-holding-usd bg-gray-400 p-2 rounded flex justify-center items-center text-white text-10"></i></button>
                            </div>
                        </div>
                        </div>
                        `
                    );
                });
            } 
        }
    });
}
planDetails();

// Fetching equipment details
// Fetching equipment details
function equipmentDetails() {
    $.ajax({
        url: "../api.php",
        type: "GET",
        data: {
            equipmentoperation: "equipmentoperation"
        },
        success: function (response) {
            if (response.status === 200) {
                response.data.forEach(item =>{
                    $("#tooltbody").append(
                        `
                        <div  class="flex   border border-blue-600 shadow-sm  border-4 rounded-md mt-1 text-leftt">
                        <div class="p-2 w-10">${item.id} </div>
                        <div class="p-2 w-20 ">${item.tool_name}</div>
                        <div class="p-2 w-20 ">${item.tool_type}</div>
                        <div class="p-2 w-20">${item.e_condition}</div>
                        <div class="p-2 w-20 ">${item.price}</div>
                        <div class="p-2 w-20 text-left">${item.manufacturer}</div>
                        <div class="p-2 w-20 text-left">${item.purchase_date}</div>
                        <div class="p-2 w-20 text-left">${item.created_at}</div>
                        <div class="p-2 w-1/6 text-left flex gap-2">
                            <div>
                            <button onclick="editplan(${item.id})" ><i class="fa fa-edit bg-blue-400 p-2 rounded flex justify-center items-center text-white text-10"></i></button>
                            </div>
                            <div>
                            <button  onclick="deleteequipment(${item.id})" ><i class="fa fa-trash bg-red-400 p-2 rounded flex justify-center items-center text-white text-10"></i></button>
                            </div>
                        </div>
                        </div>
                        `
                    );
                });
            } 
        }
    });
}
equipmentDetails();


// Fetching meber payment details
// Fetching member payment details
function memberpaymentDetails() {
    $.ajax({
        url: "../api.php",
        type: "GET",
        data: {
            memberoperation: "memberoperation"
        },
        success: function (response) {
            if (response.status === 200) {
                response.data.forEach(item =>{
                    $("#tooltbody").append(
                        `
                        <div  class="flex   border border-blue-600 shadow-sm  border-4 rounded-md mt-1 text-leftt">
                        <div class="p-2 w-10">${item.id} </div>
                        <div class="p-2 w-20 ">${item.plan_id}</div>
                        <div class="p-2 w-20 ">${item.user_id}</div>
                        <div class="p-2 w-20">${item.amount}</div>
                        <div class="p-2 w-20 ">${item.plan_name}</div>
                        <div class="p-2 w-20 text-left">${item.duration}</div>
                        <div class="p-2 w-20 text-left">${item.price}</div>
                        <div class="p-2 w-20 text-left">${item.created_at}</div>
                        <div class="p-2 w-1/6 text-left flex gap-2">
                            <div>
                            <button onclick="editplan(${item.id})" ><i class="fa fa-edit bg-blue-400 p-2 rounded flex justify-center items-center text-white text-10"></i></button>
                            </div>
                            <div>
                            <button  onclick="deleteequipment(${item.id})" ><i class="fa fa-trash bg-red-400 p-2 rounded flex justify-center items-center text-white text-10"></i></button>
                            </div>
                        </div>
                        </div>
                        `
                    );
                });
            } 
        }
    });
}
equipmentDetails();

//fetching member plan details
//fetching member plan details
function plan(details_id) {
    $.ajax({
        url: "../api.php",
        type: "GET",
        data: {
            details_id: details_id,
            membersplan: "membersplan"
        },
        success: function (response) {
            if (response.status === 200) {
                response.data.forEach(item => {
                    Swal.fire({
                        title: "Add New Plan",
                        html: `
                            <form id="registrationForm" class=" mt-6">
                                <div>
                                    <div class="mt-8">
                                        <label class="text-left text-sm" style="display: block;">Member id</label>
                                        <input class="form-control" type="text" placeholder="Enter member id" id="user_id" required><br>

                                        <label class="text-left text-sm" style="display: block;">Plan id</label>
                                        <input value="${item.id}" class="form-control" type="text" placeholder="Plan Name" id="id" required readonly><br>

                                        <label class="text-left text-sm" style="display: block;">Plan Name</label>
                                        <input value="${item.plan_name}" class="form-control" type="text" placeholder="Plan Name" id="pName" required readonly><br>

                                        <label class="text-left text-sm" style="display: block;">Duration</label>
                                        <input value="${item.duration}" class="form-control"  type="text" placeholder="Plan duration" id="duration" required readonly><br>

                                        <label class="text-left text-sm" style="display: block;">Price</label>
                                        <input value="${item.price}" class="form-control"  type="phone" placeholder="Plan price" id="price" required readonly><br>
                                    </div>
                                </div>
                            </form>
                        `,
                        showCancelButton: true,
                        confirmButtonText: "Register",
                        cancelButtonText: "Close",
                        allowOutsideClick: false,
                    }).then(function (result) {
                        if (result.isConfirmed) {
                            var user_id = $.trim($("#user_id").val());
                            // Additional AJAX request to check if user_id exists in the registration table
                            $.ajax({
                                url: "../api.php",
                                type: "GET",
                                data: {
                                    user_id: user_id,
                                    check_user: "check_user"
                                },
                                success: function (userResponse) {
                                    if (userResponse.status === 200 && userResponse.exists) {
                                        var user_id = $.trim($("#user_id").val());
                                        var id = $.trim($("#id").val());
                                  
                                         // Additional AJAX request to check if member  has already register for the plan
                                        $.ajax({
                                            url: "../api.php",
                                            type: "GET",
                                            data: {
                                                user_id: user_id,
                                                id:id,
                                                user_existence: "user_existence"
                                            },
                                            success:function(response){
                                                if(response.status === 200){
                                                    Swal.fire({
                                                        icon: "error",
                                                        title: "This member has alredy registered for this plan",
                                                        timer: 2000,
                                                        position: 'top-end'
                                                    });
                                                }else{
                                                     //proceed to userregistration
                                                    //proceed to userregistration
                                                    var user_id = $.trim($("#user_id").val());
                                                    var id = $.trim($("#id").val());
                                                    var pName = $.trim($("#pName").val());
                                                    var duration = $.trim($("#duration").val());
                                                    var price = $.trim($("#price").val());
                                                  
            
                                                    if (user_id === "" || id === "" || pName === "" || duration === "" || price === "") {
                                                        Swal.fire({
                                                            icon: "error",
                                                            title: "All input fields are required",
                                                            timer: 2000,
                                                            position: 'top-end'
                                                        });
                                                    } else {
                                                        Swal.fire({
                                                            icon: "question",
                                                            title: "Are you sure you want to submit the form?",
                                                            showConfirmButton: true,
                                                            confirmButtonText: "Yep",
                                                            showCancelButton: true,
                                                            cancelButtonText: "Nope"
                                                        }).then(function (result) {
                                                            if (result.isConfirmed) {
                                                                $.ajax({
                                                                    url: "../api.php",
                                                                    type: "POST",
                                                                    data: {
                                                                        user_id: user_id,
                                                                        id: id,
                                                                        pName: pName,
                                                                        duration: duration,
                                                                        price: price,
                                                                        memberplanadd: "memberplanadd",
                                                                    },
                                                                    success: function (response) {
                                                                        if (response.status == 200) {
                                                                            Swal.fire({
                                                                                icon: "success",
                                                                                title: "Plan registered successfully",
                                                                                timer: 2000
                                                                            });
                                                                        } else {
                                                                            Swal.fire({
                                                                                icon: "error",
                                                                                title: "Unable to register plan",
                                                                                timer: 2000
                                                                            });
                                                                        }
                                                                    }
                                                                });
                                                            }
                                                        });
                                                    }

                                                  
                                                }
                                            }

                                        })
                                        // User exists, proceed with registration
                                    
                                    } else {
                                        Swal.fire({
                                            icon: "error",
                                            title: "User ID not found in registration table",
                                            timer: 2000,
                                            position: 'top-end'
                                        });
                                    }
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Registration has been cancelled",
                                timer: 2000
                            });
                        }
                    });
                });
            }
        }
    });
}
plan()

/* ------START ------*/
/* ------START ------*/

//fetching member payment details
//fetching member payment details
function planpayment(details_id) {
    $.ajax({
        url: "../api.php",
        type: "GET",
        data: {
            details_id: details_id,
            membersplanpayment: "membersplanpayment"
        },
        success: function (response) {
            if (response.status === 200) {
                response.data.forEach(item => {
                    Swal.fire({
                        title: "Add New Plan",
                        html: `
                            <form id="registrationForm" class=" mt-6">
                                <div>
                                    <div class="mt-8">
                                        <label class="text-left text-sm" style="display: block;">Member id</label>
                                        <input class="form-control" type="text" placeholder="Enter member id" id="user_id" required><br>

                                        <label class="text-left text-sm" style="display: block;">Amount</label>
                                        <input class="form-control" type="text" placeholder="Amount to pay" id="amount" required><br>

                                        <label class="text-left text-sm" style="display: block;">Plan id</label>
                                        <input value="${item.id}" class="form-control" type="text" placeholder="Plan Name" id="id" required readonly><br>

                                        <label class="text-left text-sm" style="display: block;">Plan Name</label>
                                        <input value="${item.plan_name}" class="form-control" type="text" placeholder="Plan Name" id="pName" required readonly><br>

                                        <label class="text-left text-sm" style="display: block;">Duration</label>
                                        <input value="${item.duration}" class="form-control"  type="text" placeholder="Plan duration" id="duration" required readonly><br>

                                        <label class="text-left text-sm" style="display: block;">Price</label>
                                        <input value="${item.price}" class="form-control"  type="phone" placeholder="Plan price" id="price" required readonly><br>
                                    </div>
                                </div>
                            </form>
                        `,
                        showCancelButton: true,
                        confirmButtonText: "Register",
                        cancelButtonText: "Close",
                        allowOutsideClick: false,
                    }).then(function (result) {
                        if (result.isConfirmed) {
                            var user_id = $.trim($("#user_id").val());
                            // Additional AJAX request to check if user_id exists in the registration table
                            $.ajax({
                                url: "../api.php",
                                type: "GET",
                                data: {
                                    user_id: user_id,
                                    check_user: "check_user"
                            },
                            success: function (userResponse) {
                                if (userResponse.status === 200 && userResponse.exists) {
                                    // checking if the user has really subscribe to the plan  he is making payment for 
                                    var user_id = $.trim($("#user_id").val());
                                    var id = $.trim($("#id").val());
                                    $.ajax({
                                          url: "../api.php",
                                          type: "GET",
                                          data: {
                                            user_id: user_id,
                                            id:id,
                                              checkSubscription: "checkSubscription"
                                          },
                                          success:function(response){
                                            if(response.status === 200){
                                                //checking if full payment has been made
                                                //checking if full payment has been made
                                                var amount = $.trim($("#amount").val());
                                                var price = $.trim($("#price").val());
                                                var id = $.trim($("#id").val());
                                                var user_id = $.trim($("#user_id").val());

                                                if(amount === price){
                                                    $.ajax({
                                                        url: "../api.php",
                                                        type: "GET",
                                                        data: {
                                                            id:id,
                                                            user_id:user_id,
                                                            amount: amount,
                                                            price:price,
                                                            fullPayment: "fullPayment"
                                                        },
                                                        success:function(response){
                                                            if(response.status === 500){
                                                                Swal.fire({
                                                                    icon: "error",
                                                                    title: "User has make full payment",
                                                                    timer: 2000,
                                                                    position: 'top-end'
                                                                });
                                                            }else{
                                                                 //proceed to user payment
                                                                //proceed to user payment
                                                                var user_id = $.trim($("#user_id").val());
                                                                var amount = $.trim($("#amount").val());
                                                                var id = $.trim($("#id").val());
                                                                var pName = $.trim($("#pName").val());
                                                                var duration = $.trim($("#duration").val());
                                                                var price = $.trim($("#price").val());
                        
                                                                if (amount==="" || user_id === "" || id === "" || pName === "" || duration === "" || price === "") {
                                                                    Swal.fire({
                                                                        icon: "error",
                                                                        title: "All input fields are required",
                                                                        timer: 2000,
                                                                        position: 'top-end'
                                                                    });
                                                                } else {
                                                                    Swal.fire({
                                                                        icon: "question",
                                                                        title: "Are you sure you want to submit the form?",
                                                                        showConfirmButton: true,
                                                                        confirmButtonText: "Yep",
                                                                        showCancelButton: true,
                                                                        cancelButtonText: "Nope"
                                                                    }).then(function (result) {
                                                                        if (result.isConfirmed) {
                                                                            $.ajax({
                                                                                url: "../api.php",
                                                                                type: "POST",
                                                                                data: {
                                                                                    user_id: user_id,
                                                                                    amount:amount,
                                                                                    id: id,
                                                                                    pName: pName,
                                                                                    duration: duration,
                                                                                    price: price,
                                                                                    paymentadd:"paymentadd"
                                                                                   
                                                                                },
                                                                                success: function (response) {
                                                                                    if (response.status == 200) {
                                                                                        Swal.fire({
                                                                                            icon: "success",
                                                                                            title: "Plan registered successfully",
                                                                                            timer: 2000
                                                                                        });

                

                                                                        } else {
                                                                            Swal.fire({
                                                                                            icon: "error",
                                                                                            title: "Unable to register plan",
                                                                                            timer: 2000
                                                                                        });
                                                                                    }
                                                                                }
                                                                            });
                                                                        }
                                                                    });
                                                                }
            
                                                              
                                                            }
                                                        }
            
                                                    })  
                                                }else{

                                                    Swal.fire({
                                                        icon:"error",
                                                        title:"Part payment is not accepted"
                                                    })
                                                }
                                                
                                                
                                            }else{
                                                Swal.fire({
                                                    icon:"error",
                                                    title:"First subscribe to the plan"
                                                })
                                            }
                                          }
                                      });

                                    
                                    } else {
                                        Swal.fire({
                                            icon: "error",
                                            title: "User ID not found in registration table",
                                            timer: 2000,
                                            position: 'top-end'
                                        });
                                    }
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Registration has been cancelled",
                                timer: 2000
                            });
                        }
                    });
                });
            }
        }
    });
}
plan()

/*------END -----*/
/*------END -----*/



//Updating the member status
//Updating the member status
function updateStatus(status_id){
    $.ajax({
        url:"../api.php",
        type:"POST",
        data:{
            status_id:status_id,
            statusUpdate:"statusUpdate"
        },
        success:function(response){
            if(response.status == 200){
                Swal.fire({
                    icon:"success",
                    title:"status changed"
                })
            }else{
                Swal.fire({
                    icon:"error",
                    title:"oopps"
                })
            }
        }
    })
}

//deleting user
//deleting user
function deleteUser(delete_id){
   Swal.fire({
        icon:"question",
        title: "Are your sure to delete this record",
        showConfirmButton:true,
        confirmButtonText:"Yhep",
        showCancelButton:true,
        cancelButtonText:"Nhop",
        allowOutsideClick:false
   }).then(function(result){
    if(result.isConfirmed){
        $.ajax({
            url:"../api.php",
            type:"POST",
            data:{
                delete_id:delete_id,
                userDelete:"userDelete"
            },
            success:function(response){
                if(response.status == 200){
                    Swal.fire({
                        icon:"success",
                        title:"User deleted successfully"
                    })
                }else{
                    Swal.fire({
                        icon:"error",
                        title:"Unable to delete user"
                    })
                }
            }
        })
    }
   })
}

//deleting equipment
//deleting equipment
function deleteequipment(delete_id){
    Swal.fire({
         icon:"question",
         title: "Are your sure to delete this record",
         showConfirmButton:true,
         confirmButtonText:"Yhep",
         showCancelButton:true,
         cancelButtonText:"Nhop",
         allowOutsideClick:false
    }).then(function(result){
     if(result.isConfirmed){
         $.ajax({
             url:"../api.php",
             type:"POST",
             data:{
                 delete_id:delete_id,
                 equipmentDelete:"equipmentDelete"
             },
             success:function(response){
                 if(response.status == 200){
                     Swal.fire({
                         icon:"success",
                         title:"Equipment deleted successfully"
                     })
                 }else{
                     Swal.fire({
                         icon:"error",
                         title:"Unable to delete equipment"
                     })
                 }
             }
         })
     }
    })
 }
//deleting user
//deleting user
function deleteplan(delete_id){
    Swal.fire({
         icon:"question",
         title: "Are your sure to delete this record",
         showConfirmButton:true,
         confirmButtonText:"Yhep",
         showCancelButton:true,
         cancelButtonText:"Nhop",
         allowOutsideClick:false
    }).then(function(result){
     if(result.isConfirmed){
         $.ajax({
             url:"../api.php",
             type:"POST",
             data:{
                 delete_id:delete_id,
                 planDelete:"planeDelete"
             },
             success:function(response){
                 if(response.status == 200){
                     Swal.fire({
                         icon:"success",
                         title:"Plan deleted successfully"
                     })
                 }else{
                     Swal.fire({
                         icon:"error",
                         title:"Unable to delete plan"
                     })
                 }
             }
         })
     }
    })
 }
 







<!DOCTYPE html>
<html>
    <head>
        <title>Registration form</title>
        <style>
            .form{
                border: 2px solid #fff0f0ff;
                border-radius: 10px;
                padding: 20px;
                width: 500px;
                background: white;
            }
            input{
                width: 95%;
                padding: 7px;
                border-radius: 5px;
            }
            button{
                padding: 10px 20px;
                background-color: #0863adff;
                color: white;
                border-radius: 5px;
                border: none;
                cursor: pointer;
                font-size: 17px;
            }
            #output{
                margin: 15px;
                font-size: 15px;
            }
        </style>
    </head>

    <body>
        <center>
           <table class="form">
                <tr><td><h1>Student Registration</h1></td></tr>
                <tr><td>Full Name:</td></tr>
                <tr><td><input type="text" id="fullname"></td></tr>
                <tr><td>Email:</td></tr>
                <tr><td><input type="email" id="email" placeholder="ABC@gmail.com"></td></tr>
                <tr><td>Password:</td></tr>
                <tr><td><input type="password" id="psaaword"></td></tr>
                <tr><td>Confirm Password:</td></tr>
                <tr><td><input type="password" id="confirmpassword"></td></tr>

                <tr><td><button>Register</button></td></tr>

                <tr><td><div id="output"></div></td></tr><br><br>

                <tr><td><h1>Course Registration</h1></td></tr>
                <tr><td>Course Name:</td></tr>
                <tr><td><input type="text"></td></tr>
                <tr><td><button>Add Course</button></td></tr>




           </table> 
        </center>

        <script>
            function Register()
            {
                var name = document.getElementById("fullname").value.trim();
                var email = document.getElementById("email").value.trim();
                var password = document.getElementById("password").value.trim();
                var confirmPassword = document.getElementById("confirmpassword").value.trim();
            }
        </script>
        
    </body>
</html>
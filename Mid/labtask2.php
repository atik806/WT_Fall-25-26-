<!Doctype html>
<html>
    <head>
        <title>
            Lab task 2   
        </title>
    </head>
    <body>

    <style>
        body{
            background-color: #e6f2ff;
        }
        h1{
            text-align: center;
            margin-top: 50px;
            color: #003366;
        }
        form{
            background-color: #ffffff;
            padding: 20px;
            width: 400px;
            margin: 0 auto;
            border-radius: 10px;
        }
        button {
            background-color: #003366;
            color: white;
            cursor: pointer;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
        }
        .a{
            font-size: 20px;
            text-align: center;
            color: #003366;
            margin-top: 20px;   


        }
        table{
            width: 100%;
        }
        td{
            padding: 10px;
        }
        .b{
            font-size: 16px;
            padding: 10px;


        }
        input{
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
        

    </style>

    <h1>Student Registration</h1>

    <form onsubmit="return handelSubmit()">
        <table>
            <tr>
                <td>Full name:</td>
                <td><input type="text" name="fullname" id = "fullname"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id = "email"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>

            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="confirmpassword" id = "compass"></td>
            </tr>

            <tr>
                <td>
                    <button id ="button">Register</button>
                </td>
            </tr>
        </table>
    </form>
    <form onsubmit="return handelSubmit1()">
        <table>
            <tr>
                <td class = "a">
                    <center>Course Registration</center>
                </td>
            </tr>
            <tr>
                <td class="b">
                    Course Name:<input type="text" name="coursename">
                </td>
            </tr>
            <tr>
                <td>
                    <button>Add</button>
                </td>
            </tr>
        </table>
    </form>
    <div id = "error"></div>
    <div id = "output"></div>
    <script>
        function handelSubmit(){
            var name = document.getElementById("fullname").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var compass = document.getElementById("compass").value;
            var errordiv = document.getElementById("error");
            var outputdiv = document.getElementById("output");

            errordiv.innerHTML = "";
            outputdiv.innerHTML = "";

            if(name === "" || email === "" || password === "" || compass === ""){
                errordiv.innerHTML = "Please fill in all fields.";
                return false;
            }
            if(password !== compass){
                errordiv.innerHTML = "password did not match.";
                return false;
            }
            if(password.length<8){
                errordiv.innerHTML="password must be 8 characters long.";
                return false;
            }
            outputDiv.innerHTML= `
                Registration success <br><br>
                Name:${name}<br>
                Email:${email}<br>
                password:${password}<br>

            `;
            return false;
            

            
        }
    </script>

</body>
</html>
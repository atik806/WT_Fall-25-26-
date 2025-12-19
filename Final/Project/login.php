<!Doctype html>
<html>
<head>
    <title>Login Page</title>

    <style>
        body{
            background-color: white;
            font-family: "Times New Roman", sans-serif;
        }

        fieldset{
            width: 400px;
            margin-top: 80px;
            padding: 20px;
            border-radius: 5px;
        }

        legend{
            text-align: center;
            font-size: 18px;
            color: black;
        }

        h2{
            text-align: center;
            color: black;
            font-size: 32px;
            margin-bottom: 10px;
        }

        .a, .b{
            font-size: 18px;
            color: black;
        }

        input[type="text"],
        input[type="password"]{
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .button{
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <center>
        <fieldset>

            <legend>Welcome back, please login</legend>

            <h2>Login</h2>

            <table width="100%">
                <tr>
                    <td class="a">Email</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="email" placeholder="Enter your email">
                    </td>
                </tr>

                <tr>
                    <td class="b">Password</td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="password" placeholder="Enter your password">
                    </td>
                </tr>
            </table>

            <center>
                <input type="submit" class="button" value="Login">
                <input type="submit" class="button" value="Register">
            </center>

        </fieldset>
    </center>
</body>
</html>

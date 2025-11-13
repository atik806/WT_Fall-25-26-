<!DOCTYPE html>
<html>
<head>
<title>Patient Registration</title>
<style>
    body {
        background-color: #f2f2f2;
        font-family: "Times New Roman", serif;
        padding: 20px;
    }

    .s1 {
        color: blue;
        font-size: 40px;
        text-align: center;
        margin-bottom: 20px;
    }

    div {
        border-radius: 10px;
        width: 600px;
        margin: 30px auto;
        background-color: #fff2be;
        padding: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    table {
        width: 100%;
    }

    .s2 {
        text-align: left;
        font-weight: bold;
        padding-top: 10px;
    }

    .s3 input, .s3 select {
        width: 100%;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    .a {
        color: blue;
        text-align: center;
        margin-top: 20px;
    }

    .button {
        background-color: blue;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 20px;
        width: 100%;
    }

    .button:hover {
        background-color: darkblue;
    }
</style>
</head>
<body>
    <h1 class="s1">Clinic Patient Registration</h1>

    <div>
        <form>
            <table>
                <tr>
                    <td class="s2">Full Name:</td>
                </tr>
                <tr>
                    <td class="s3"><input type="text" required></td>
                </tr>

                <tr>
                    <td class="s2">Age:</td>
                </tr>
                <tr>
                    <td class="s3"><input type="number" required></td>
                </tr>

                <tr>
                    <td class="s2">Phone Number:</td>
                </tr>
                <tr>
                    <td class="s3"><input type="tel" required></td>
                </tr>

                <tr>
                    <td class="s2">Email:</td>
                </tr>
                <tr>
                    <td class="s3"><input type="email" required></td>
                </tr>

                <tr>
                    <td class="s2">Insurance Provider:</td>
                </tr>
                <tr>
                    <td class="s3">
                        <select required>
                            <option>Select Provider</option>
                            <option>Provider 1</option>
                            <option>Provider 2</option>
                            <option>Provider 3</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="s2">Insurance Policy Number:</td>
                </tr>
                <tr>
                    <td class="s3"><input type="text" required></td>
                </tr>

                <tr><td class="a"><h2>Additional Information</h2></td></tr>

                <tr>
                    <td class="s2">Username:</td>
                </tr>
                <tr>
                    <td class="s3"><input type="text" required></td>
                </tr>

                <tr>
                    <td class="s2">Password:</td>
                </tr>
                <tr>
                    <td class="s3"><input type="password" required></td>
                </tr>

                <tr>
                    <td class="s2">Confirm Password:</td>
                </tr>
                <tr>
                    <td class="s3"><input type="password" required></td>
                </tr>

                <tr>
                    <td><input type="submit" class="button" value="Register"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

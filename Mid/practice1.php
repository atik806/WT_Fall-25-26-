<!DOCTYPE html>
<html>
    <head>
        <title>Admission Form</title>
    </head>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f9f9f9;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: auto;
    }

    fieldset {
        border: 1px solid #ccc;
        margin-bottom: 20px;
        padding: 10px;
    }

    h2 {
        margin-top: 0;
        color: #555;
    }

    table {
        width: 100%;
    }

    td {
        padding: 10px;
        vertical-align: top;
    }

    input[type="text"], input[type="date"], input[type="email"], input[type="tel"], select, textarea {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="radio"], input[type="checkbox"] {
        margin-right: 10px;
    }
    .button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: Pointer;
        font-size: 16px;
        
    }
</style>
<body>
    <h1>University Admission form</h1>
    <form>
        <fieldset>
            <h2>Personal Information</h2>
            <table>
                <tr>
                    <td>
                        Full Name:<br>
                        <input type="text" name="fullname" required>    
                    </td>
                </tr>
                <tr>
                    <td>
                        Fatgher's Name:<br>
                        <input type="text" name="fathername" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Mother's Name:<br>
                        <input type="text" name="mothername" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Date of Birth:<br>
                        <input type="date" name="dob" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        gender:<br>
                        <input type="radio" name="gender" value="Male" required> Male
                        <input type="radio" name= "gender" value="Female" required> Female
                        <input type="radio" name = "gender" value="Other" required> Other
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:<br>
                        <textarea name="address" rows="5" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        Phone Number:<br>
                        <input type="tel" name="phonenumber" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Address:<br>
                        <input type="email" name="email" required>
                    </td>   
                </tr>
            </table>
        </fieldset>

        <fieldset>
            <h2>Academic Information</h2>
            <table>
                <tr>
                    <td>
                        
                        SSC/Equivalent Result:<br>
                        <input type="text" name="previousinstitution" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        HSC/Equivalent Result:<br>
                        <input type="text" name="gpa" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Prefered Department:<br>
                        <select name="department" required>
                            <option value="Select Depatment">Select Depatment</option>
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                            <option value="BBA">BBA</option>
                            <option value="ENG">ENG</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Interes:<br>
                        <input type="checkbox" name="interes" value="Sports"> Sports
                        <input type="checkbox" name="interes" value="Reading"> Reading
                        <input type="checkbox" name="interes" value="Traveling"> Traveling

                    </td>
                </tr>
            </table>
        </fieldset>

    </form>
    <center><button class = "button">Submit</button></center>
</body>
</html>
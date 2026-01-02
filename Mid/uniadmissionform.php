<html>
    <head>
        <title>
            University Admission Form
        </title>
    </head>
    <style>
        body{
            background-color: #9bb4c9ff;
            font-family: Arial, sans-serif;
            padding: 20px;
            
        }
        fieldset {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input, select, textarea{
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        label{
            margin-top: 10px;
            display: block;
            font-weight: bold;
        }
        button{
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        fieldset legend{
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 10px;
            padding: 5px;
        }
        form{
            width: 50%;
            margin: auto;
        }
    </style>
    <body>
        <h1><center>    
        University Admission Form
        </center>
        </h1>
        <form>
            <fieldset> 
            <legend>
                Personal Information <br><br>
            </legend>
            <label>Full Name: </label>
            <input type="text" name="fullname" maxlength= "50" required>

            <label>Email:</label>
            <input type="text" name="email" maxlength="50" required>

            <label> Date of Birth:</label>
            <input type="date" name="dob" required>

            <label>Gender:</label>
            <input type="radio" name = "gender" value="male" required>male
            <input type="radio" name = "gender" value="female" required>female
            </legend>
            </fieldset>
            <br>
            <fieldset>
            <legend>
                Academic Information <br><br>
            </legend>
            <label>High School Name:</label>
            <input type="text" name="schoolname" maxlength="100" required>
            <label>Graduation Year:</label>
            <input type="number" name="graduationyear" min="1900" max="2099" required>
            <label>GPA:</label>
            <input type="number" name="gpa" step="0.01" min="0" max="4.00" required>
            
            <label>Preferred Department:</label>
            <select name = "department" required>
                <option value="">--Select Department--</option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="BBA">BBA</option>
            </select>
            </fieldset>
            
        <fieldset>
            <legend>Required document</legend>
            <label>Upload Transcript</label>
            <input type="file" name = "transcript" accept=".pdf,.doc,.docx" required>

            <label>Upload Image</label>
            <input type="file" name = "image" accept=".jpg,.jpeg,.png" required>


        </fieldset>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
            
        </form>

    </body>
</html>
<!DOCTYPE html>
<html>


<title>
Personal Portfolio
</title>





<h1>Welcome to My Personal Portfolio</h1>
<h2>
    Atik Shahoriyer
</h2>
<header>
    <nav>
    <a href="#bio">Bio</a>
    <a href="#Education">Education</a>
    <a href="contact">contact</a>
</nav>
</header>
<section id="bio">
    <h3>Abut Me</h3>
    <p>
        Hello! I'm Atik Shahoriyer, a passionate web developer with a knack for creating dynamic and user-friendly websites. With a background in computer science and a love for coding, I enjoy turning ideas into reality through innovative web solutions.
    </p>

</section>

<section id="Education">
    <h3>Education</h3>
    <table>
        <tr>
            <th>Degree</th>
            <th>Institution</th>
            <th>Year</th>
        </tr>
        <tr>
            <td>Bachelor of Science in Computer Science</td>
            <td>XYZ University</td>
            <td>2020 - 2024</td>
        </tr>
        <tr>
            <td>High School Diploma</td>
            <td>ABC High School</td>
            <td>2018 - 2020</td>
        </tr>
        <tr>
            <td>Secondary School Certificate</td>
            <td>DEF Secondary School</td>
            <td>2016 - 2018</td>
        </tr>
    </table>

</section>
<section id= "contact">
    <h2>
        Contact Me:
    </h2>
    <table>
        <tr>
            <td>
                Name:
            </td>
        </tr>
        <tr>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td>
                Your Email:
            </td>
        </tr>
        <tr>
            <td>
                <input type="email">
            </td>
        </tr>
        <tr>
            <td>
                Message:
            </td>
        </tr>
        <tr>
            <td>
                <textarea rows="4" cols="30"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">
            Send Message

        </button>
            </td>
        </tr>
        
    </table>
</section>

<style>
    body{
        margin: 2px;
        padding: 2px;
        font-family: Arial, sans-serif;
    }
    header{
        background-color: #333;
        color : white;
        padding: 10px;
        text-align: center;
        
    }
    nav a{
        color: white;
        margin: 0 15px;
        font-weight: bold;
    }
    table, th, td{
        border: 1px solid black;
    }
    th, td{
        padding: 10px;
        text-align: center;
    }
    input, textarea{
        width: 60%;
        padding: 5px;
        margin: 5px 0;
    }

    button{
        padding: 10px 20px;
        background-color: #333;
        color: white;
        border: none;
        cursor: pointer;
    }

</style>
</html>
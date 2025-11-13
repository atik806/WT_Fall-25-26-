<!Doctype html>
<html>
    <head>
        <title>Atik | Portfolio</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
        text-align: center;
    }

    nav a {
        color: #fff;
        margin: 0 15px;
        text-decoration: none;
    }

    main {
        padding: 20px;
    }

    section {
        margin-bottom: 40px;
    }

    h2 {
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 9px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    input[type="text"], input[type="email"], textarea {
        width: 99%;
        padding: 8px;
        margin: 5px 0 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #333;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #555;
    }
</style>

<body>
    <header>
        <h1>Atik</h1>
        <nav>
            <a href="#about">About</a>
            <a href="#education">Education</a>
            <a href="#contact">Contact</a>
        </nav>

        

    </header>
    
<main>
    <!-- About Section -->
    <section id="about">
        <h2>About Me</h2>
        <p>Hello! I'm Atik, a web developer with a passion for creating beautiful and functional websites. Welcome to my portfolio!</p>

    </section>

    <!-- Education Section -->
     <section id="education">
        <table>
            <tr>
                <th>Degree</th>
                <th>Institution</th>
                <th>Year</th>
            </tr>
            <tr>
                    <td>B.Sc. in Computer Science & Engineering</td>
                    <td>American International University-Bangladesh (AIUB)</td>
                    <td>2022 - Present</td>
                    <td>Ongoing</td>
                </tr>
                <tr>
                    <td>HSC</td>
                    <td>Govt. Science College, Dhaka</td>
                    <td>2021</td>
                    <td>GPA 5.00</td>
                </tr>
                <tr>
                    <td>SSC</td>
                    <td>Ideal School & College</td>
                    <td>2019</td>
                    <td>GPA 5.00</td>
                </tr>
        </table>
     </section>
    <!-- Contact Section -->
     <section id="contact">
        <h2>Contact Me</h2>
<from>
    <table>
        <tr>
            <td>
                Name:<br>
                <input type="text" name="name" required>
            </td>
        </tr>

        <tr>
            <td>
                Email:<br>
                <input type="email" name="email" required>
            </td>
        </tr>
        <tr>
            <td>
                Message:<br>
                <textarea name="message" rows="5" required></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <button type= "submit">send message</button>
            </td>
        </tr>
        
    </table>
</form>
        
</section>

</main>
</body>

</html>
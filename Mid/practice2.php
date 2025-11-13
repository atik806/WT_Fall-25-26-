<!DOCTYPE html>
<html>
    <title>
        Practice Page
    </title>
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
        }
    </style>
    <body>
        <header>
            <h1>Electro Mart</h1>
            <nav>
                <a href="#">Home</a>
                <a href="#">Products</a>
                <a href="#">Contact Us</a>
            </nav>
        </header>


        <fieldset>
            <h2>Available Products</h2>
            <caption><center>
                <u>
                    <strong>
                        ElectroMart Product Catalog
                    </strong>
                </u>
            </center>
                
            </caption> 
            <table>
                <tr>
                    <th>
                        Product Image
                    </th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
               <tbody>
                <td>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd-Dki91du3Qxoc8a4yUxzzkuKx9XJvFhc0w&s" alt="Smartphone" width="100" height="100">
                </td>
                <td>
                    Iphone 17 pro <br>
                </td>
                <td>
                    6.5-inch OLED display<br>128GB storage<br>5000mAh battery
                </td>
                <td>
                    $999.99
                </td>
                <td>
                    <a href="#">Add to Cart</a>
                </td>
               </tbody>
            </table>

        </fieldset>
    </body>
</html>
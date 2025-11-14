<!Doctype html>
<html>
    <head>
        <title>
            TasteHub - Your Culinary Journey
        </title>
    </head>


    <style>
        nav{
            background-color: #cab1b1ff;
            padding: 10px;
            color: white;
        }
        nav a {
            color: black;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        section{
            background-color: #f4f4f4;
            padding: 10px;
            margin-top: 10px;
        }
        h1{
            text-align: center;

        }
        .a{
            text-align: center;
            font-size: 18px;
            margin-top: -10px;
        }
        a{
            margin: 15px;
            text-decoration: none;
            font-weight: bold;
            color: black;
        }
        span{
            font-weight: bold;
            color: green;
            text-align: right;
            
            font-size: 24px;
        }

        .menu-item{
            margin-bottom: 20px;
            justify-content: space-between;
            display: flex;
            margin: 15px;
            padding : 10px;
           
        }
        .menu-item div{
            max-width: 80%;
        }

        .price{
            font-size: 22px;
            font-weight: bold;
            color: green;
            min-width: 80px;
            text-align: right;
            white-space: nowrap;
        }

    </style>
    <body>
        
    <h1>
        TesteHub - Your Culinary Journey
    </h1>
    <h3 class = "a">
        Delicious recipes, cooking tips, and food inspiration all in one place.
    </h3>
    <nav>
        <a href="#starters">Starters</a>
        <a href="#maincourse">Main Course</a>
        <a href="#">Blog</a>
        <a href="#">About Us</a>
        <a href="#">Contact</a>
    </nav>

    <section>
        <h2> Todays Special Offers</h2>
        <ul>
            <li>Buy one get one free on all pasta dishes!</li>
            <li>20% off on all desserts.</li>
            <li>Free delivery for orders over $50.</li>
        </ul>
    </section>

    <section id = "starters">
        <fieldset>
            <legend>
                <h2>Starters</h2>
            </legend>
        
        
        <article class="menu-item">
            <h3 class = "h">Bruschetta</h3>
            <p>Grilled bread topped with fresh tomatoes, basil, garlic, and olive oil.</p>
            <span class= "price">4.99$</span>
        </article>
        <article class ="menu-item">
            <h3 class = "h">Stuffed Mushrooms</h3>
            <p>Mushroom caps filled with a savory mixture of cheese, herbs, and breadcrumbs.</p>
            <span class= "price">5.99$</span>
        </article>
        </fieldset>
    </section>

    <section id = "maincourse">
        <h2>Main Course</h2>
        <article class="menu-item">
            <h3 class = "h">Grilled Salmon</h3>
            
            <p>Fresh salmon fillet grilled to perfection, served with a side of roasted vegetables.</p>
        <span class= "price">4.99$</span>
        </article>
        <article class ="menu-item">
            <h3 class = "h">Chicken Alfredo</h3>
            <p>Creamy Alfredo sauce tossed with fettuccine pasta and tender grilled chicken.</p>
        <span class= "price">4.99$</span>
        </article>

    </section>
    <section id = "desserts">
        <h2>Desserts</h2>
        <article class ="menu-item">
            <h3 class = "h">Tiramisu</h3>
            <p>Classic Italian dessert made with layers of coffee-soaked ladyfingers and mascar
            pone cheese.</p>
            <span class= "price">4.99$</span>

        </article>
        <article class ="menu-item">
            <h3 class = "h">Chocolate Lava Cake</h3>
            <p>Warm chocolate cake with a gooey molten center, served with vanilla ice cream.</p>
        <span class= "price">4.99$</span>
        </article>

    </section>
    <section id="special">
            <fieldset>
                <legend><h2>Chef’s Special</h2> </legend>

                <article>
                    <strong>Royal Biryani</strong>
                    <span class="price">$15.99</span>
                    <p>Premium basmati rice with aromatic spices and tender meat.</p>
                </article>

                <article>
                    <strong>BBQ Platter</strong>
                    <span class="price">$19.99</span>
                    <p>A delicious mix of grilled chicken, kebab, and sausages.</p>
                </article>

            </fieldset>

            <a href="#top">Back to Top</a>
        </section>

        <footer>
            <p>Address 123 food street dhaka</p>
            <p>Contact:
                <a href="tel:+1234567890">+1234567890</a>,
                
            </p>
            <a href="#top">Back to top</a>
        </footer>
    </body>
</html>
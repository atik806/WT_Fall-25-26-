<!DOCTYPE html>
<html>
    <head>
        <title>PRACTICE</title>
    </head>
     <script>
        document.write("This text written using JavaScript");
        alert ("Welcome to the practice page");
        //var name = prompt ("Enter your name");
        if (name != null) {
            document.write("<br> Hello " + name + "! Welcome to the practice page.");
        }
        

    </script>
    <body>
        <table>
            <center>
                <h1 class="h1">This is a heading</h1>
                <p class="p1">This is a paragraph.</p>
                <div>This is a division element.</div>
                <h3 class="h3">This is a subheading</h3>
                <input class="i" type="text" placeholder="Enter text here">
                <button onclick="alert('Button clicked!')">Click Me</button>
                
            </center>
            
        </table>
       


    </body>

    <style>
        .h1{
            border: dotted;
            padding: 20px;
            text-align: center;
            
        }
        .p1{
            border: dashed;
            padding : 20px;
            text-align: center;
            
        }
        div{
            height: 50px;
            width: 150px;
            border:solid;
            padding: 5px;
            background-color: lightblue;
            text-align: center;
        }
        .h3{
            border: mix;
            padding: 10px;
        }
        .i{
            width: 100px;
            border: solid;
            padding: 10px;
            background-color: white;
            text-align: center;
        }


    </style>


</html>
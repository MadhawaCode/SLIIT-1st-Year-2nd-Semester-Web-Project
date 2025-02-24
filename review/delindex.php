<html>
    <head>
        <style>
              body {
                font-family: Arial, sans-serif;
                background-color: greenyellow;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-image:url('img/');
            }

            fieldset {
                border: 2px solid #4CAF50;
                width: 300px;
                padding: 20px;
                background-color: #ffffff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }

            legend {
                font-size: 1.5em;
                color: #4CAF50;
                font-weight: bold;
            }

            input[type="text"], input[type="date"],input[type="email"] ,select,textarea{
                width: 100%;
                padding: 10px;
                margin: 5px 0 15px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type="submit"], input[type="reset"] {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                margin: 5px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                width: 48%;
            }

            input[type="submit"]:hover, input[type="reset"]:hover {
                background-color: #45a049;
            }

            input[type="reset"] {
                background-color: #f44336;
            }
            option{
                margin: 5px 0;
            }

            
        </style>

    </head>
    <body>
        <fieldset>
            <legend><b>Review</b></legend>
            <form method="post" action="delete.php">
                
                <input type="text" name="reviewId" placeholder="Review ID" required><br>
                

                
                <input type="submit" value="Delete">
            </form>
        </fieldset>
    </body>
</html>
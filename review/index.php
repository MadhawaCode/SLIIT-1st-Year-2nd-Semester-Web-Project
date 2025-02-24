<html>
    <head>
        <style>
            
        
        </style>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <fieldset>
            <legend><b>Submit a Review</b></legend>
            <form method="post" action="insert.php">
                <input type="email" name="useremail" placeholder="User Email" required><br>

                <select name="reviewtype" required>
                    <option value="" disabled selected>Review Type</option>
                    <option value="Hotel">Hotel</option>
                    <option value="Vehicle">Vehicle</option>
                    <option value="Tour Guide">Tour Guide</option>
                </select><br>

                <input type="text" name="rating" placeholder="Rating (out of 10)" pattern="\d*" title="Please enter a number" required><br>

                <textarea name="Description" placeholder="Description" rows="4" required></textarea><br>

                <input type="date" name="udate" required><br>

                <input type = "Submit" value = "Submit"  onclick="window.location.href='read.php';">
                <input type="reset" value="Reset">
            </form>
        </fieldset>
    </body>
</html>

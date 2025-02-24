<html>
<head>
    <style>
       
        
    </style>
    <link rel="stylesheet" href="upindex.css">
    
</head>
<body>
    <fieldset>
        <legend><b>Review Update</b></legend>
        <form method="post" action="update.php">
            <input type="text" name="reviewid" placeholder="Review ID" required><br>
            <input type="email" name="useremail" placeholder="User Email" required><br>
            
            <select name="reviewtype" required>
                <option value="" disabled selected class="option">Review Type</option>
                <option value="Hotel">Hotel</option>
                <option value="Vehicle">Vehicle</option>
                <option value="Tour Guide">Tour Guide</option>
            </select><br>

            <input type="text" name="rating" placeholder="Rating (out of 10)" required><br>
            <textarea name="Description" placeholder="Description" rows="4" required></textarea><br>
            <input type="date" name="udate" required><br>
            
            <input type="submit" value="Update"window.location.href = 'read.php';>
        </form>
    </fieldset>
</body>
</html>

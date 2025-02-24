<?php include '../HF/cheader.php';?>

<head>
    
    <title>Ceylon Journey - Reservation</title>
    <link rel="stylesheet" href="styl.css">
    
</head>
    
    
    <section class="reservation" id="reservation">
        <h1 class="heading">
            <span>R</span><span>e</span><span>s</span><span>e</span><span>r</span><span>v</span><span>a</span><span>t</span><span>i</span><span>o</span><span>n</span>
        </h1>

        
        <form action="confirm_reservation.php" method="POST">
            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first_name" placeholder="Enter your first name" required>

            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last_name" placeholder="Enter your last name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="country">Country:</label>
            <input type="text" id="country" name="country" placeholder="Enter your country" required>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" placeholder="Enter your city" required>

            <label for="hotel">Hotel:</label>
            <select id="hotel" name="hotel" required>
                <option value="" disabled selected>Select your hotel</option>
                <option value="hotel1">Avenra Garden</option>
                <option value="hotel2">Hilton Colombo</option>
                <option value="hotel3">The Epitome</option>
            </select>

            <label for="room-type">Room Type:</label>
            <select id="room-type" name="room_type" required>
                <option value="" disabled selected>Select room type</option>
                <option value="single">Single Room</option>
                <option value="double">Double Room</option>
                <option value="suite">Suite</option>
            </select>

            <label for="checkin">Check-In Date:</label>
            <input type="date" id="checkin" name="checkin" required>

            <label for="checkout">Check-Out Date:</label>
            <input type="date" id="checkout" name="checkout" required>

            <label for="guests">Number of Guests:</label>
            <input type="number" id="guests" name="guests" required min="1">

            <button type="submit" class="btn">Confirm Reservation</button>
        </form>
    </section>

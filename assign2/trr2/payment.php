<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Enquiry</title>
        <link rel="stylesheet" href="styles/style.css">
        <meta charset="utf-8">
        <meta name="description" content="The Reel Room Enquiry">
        <meta name="keywords" content="payment">
        <meta name="author" content="Cao Minh Nhat, Vo Nam Thinh, Le Quang Ngoc Dung">
        <title>Payment</title>
    </head>

    <body>

        <?php 
            include "includes/header.inc";
        ?>

        <!-- ENQUIRY  -->
    <div class="nhat-container">
        <div class="nhat-middle">
            <form class="nhat-form" method="post" action="process_order.php">
                <h2 class="nhat-h2">PAYMENT</h2>
                
                <!-- Basic info: Name, Email -->
                <p><label>First name: <input type="text" id="firstname" name="first_name" placeholder="Insert" pattern="[a-zA-Z]{1,25}"></label></p>
                <p><label>Last name: <input type="text" id="lastname" name="last_name" placeholder="Insert"></label></p>
                <p><label>Email address: <input type="email" id="email" name="email" placeholder="Insert"></label></p>
                
                <!-- Address: street, town, state, postcode -->
                <fieldset>
                    <legend>Your address:</legend>
                    <p><label>Street address: <input type="text" id="street" name="street" placeholder="Insert" pattern=".{1,40}"></label></p>
                    <p><label>Suburb/town: <input type="text" id="suburb" name="suburb" placeholder="Insert" pattern=".{1,20}"></label></p>
                    <p><label for="state">State: 
                        <select id="state" name="state">
                            <option value="VIC" selected>VIC</option>
                            <option value="NSW">NSW</option>
                            <option value="QLD">QLD</option>
                            <option value="NT">NT</option>
                            <option value="WA">WA</option>
                            <option value="SA">SA</option>
                            <option value="TAS">TAS</option>
                            <option value="ACT">ACT</option>
                        </select>
                    </label></p>
                    <p><label>Your postcode: <input type="text" id="postcode" name="postcode" pattern="[0-9]{4}"></label></p>
                </fieldset>

                <!-- Phone number and choose preferred contact-->
                <p><label>Your phone number: <input type="text" id="phone" name="phone" placeholder="Maximum 1 0 digits" pattern="[0-9]{10}"></label></p>
                <p>Preferred contact: 
                    <label><input type="radio" id="prefemail" name="preferred_contact" value="Email">Email</label>
                    <label><input type="radio" id="prefpost" name="preferred_contact" value="Post">Post</label>
                    <label><input type="radio" id="prefphone" name="preferred_contact" value="Phone" checked>Phone</label>
                    </p>
            
        <!------------------------------------------------------------------------------------------------------------------------- -->

                <p><label for="moviechosen">Which movie do you want to choose ? <br><br> 
                        <select id="moviechosen" name="moviechosen">                
                            <option value="itmfl" selected>In the mood for love</option>
                            <option value="midsommar">Midsommar</option>
                            <option value="ouatih">Once upon a time in Holywood</option>
                            <option value="dune">Dune</option>
                            <option value="coraline">Coraline</option>
                            <option value="lit">Lost in translation</option>
                    </select>
                    </label></p>

            <!-- Chosing ticket type -->
            <p><label for="ticketype">Which ticket type do you want to choose ? <br><br> 
                <select id="ticketype" name="option">                
                    <option value="single" selected>Single (1 ticket)</option>
                    <option value="couple">Couple (2 ticket)</option>
                    <option value="family">Family (3 ticket)</option>
                </select>
            </label></p>

            <!-- Chosing quantity -->
            <p><label>How many combo do you want to purchase ? <input type="number" id="quantity" name="quantity" placeholder="Insert" pattern="[a-zA-Z]{1,25}"></label></p>
                
            <!-- Address: street, town, state, postcode -->
            <fieldset>
                <legend>Credit Card details: </legend>

                <p><label for="card_type">Credit Card type: 
                    <select id="card_type" name="cc_type">
                        <option value="" selected></option>
                        <option value="Visa">Visa</option>
                        <option value="Mster">Mastercard</option>
                        <option value="AE">American Express</option>
                        <option value="Dis">Discover</option>
                    </select>
                </label></p>

                <p><label>Name on your card: <input type="text" id="street" name="cc_name" placeholder="Insert" pattern=".{1,40}"></label></p>
                <p><label>Credit Card number: <input type="number" id="cardnumber" name="cc_number" placeholder="Insert" pattern=".{1,20}"></label></p>
                <p><label>Expired Date:</label><input type="text" name="cc_expiry_date"></p>
                <p><label>Card verification Value:<input type="text" id="CVV" name="cvv" placeholder="Insert" pattern=".{1,40}"></label></p>

            </fieldset>

            <!-- Button -->

                <p class="nhat-p">Thank you for your information! Have a good day!</p>
                <p><label><input type="submit" name="submit" value="Check Out"></label></p>
            </form>
        </div>
    </div>
                                                      
    <?php 
        include "includes/footer.inc";
    ?>

    </body>
</html>
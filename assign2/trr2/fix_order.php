<?php
 session_start();
    $data = $_SESSION['data'];

    function showMessage($key) {
        $errors = $_SESSION['errors'];
        if(isset($errors[$key])){
            echo "<p class='error'>".$errors[$key]."</p>";
        }else{
            echo '';
        }
    }

    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    $last_name = $_GET['last_name'];
    $street = $_GET['street'];
    $state = $_GET['state'];
    $postcode = $_GET['postcode'];
    $phone = $_GET['phone'];
    $preferred_contact = $_GET['preferred_contact'];
    $moviechosen = $_GET['moviechosen'];
    $cc_type = $_GET['cc_type'];
    $cc_name = $_GET['cc_name'];
    $cc_number = $_GET['cc_number'];
    $cc_expiry_date = $_GET['cc_expiry_date'];
    $cvv = $_GET['cvv'];
    $email = $_GET['email'];
    $quantity = $_GET['quantity'];
    $option = $_GET['option'];
    


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Enquiry</title>
        <link rel="stylesheet" href="styles/style.css">
        <meta charset="utf-8">
        <meta name="description" content="The Reel Room Enquiry">
        <meta name="keywords" content="enquiry">
        <meta name="author" content="Cao Minh Nhat">
        <title>Enquiry</title>
    </head>

    <body>

        <?php 
            include "includes/header.inc";
        ?>

        <!-- ENQUIRY  -->
    <div class="nhat-container">
        <div class="nhat-middle">
            <form class="nhat-form" method="post" action="process_order.php">
                <h2 class="nhat-h2">ENQUIRY</h2>
                
                <!-- Basic info: Name, Email -->
                <p><label>First name: <input type="text" id="firstname" value="<?= $first_name; ?>" name="first_name" placeholder="Insert" pattern="[a-zA-Z]{1,25}"></label></p>
                <?php
                    showMessage('first_name')
                ?>
                <p><label>Last name: <input type="text" id="lastname" value="<?= $last_name; ?>" name="last_name" placeholder="Insert"></label></p>
                <?php
                    showMessage('last_name')
                ?>
                <p><label>Email address: <input type="email" id="email" value="<?= $email; ?>" name="email" placeholder="Insert"></label></p>
                <?php
                   showMessage('email')
                ?>
                <!-- Address: street, town, state, postcode -->
                <fieldset>
                    <legend>Your address:</legend>
                    <p><label>Street address: <input type="text" id="street" name="street"  value="<?= $street; ?>" placeholder="Insert" pattern=".{1,40}"></label></p>
                    <?php
                    showMessage('street')
                ?>
                    <!-- <p><label>Suburb/town: <input type="text" id="suburb" name="suburb" placeholder="Insert" pattern=".{1,20}"></label></p> -->
                    
                    <p><label for="state">State: 
                        <select id="state" name="state"  value="<?= $state; ?>">
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
                    <?php
                      showMessage('state')
                ?>
                    <p><label>Your postcode: <input type="text" id="postcode" value="<?= $postcode; ?>" name="postcode" pattern="[0-9]{4}"></label></p>
                    <?php
                   showMessage('postcode')
                ?>
                </fieldset>

                <!-- Phone number and choose preferred contact-->
                <p><label>Your phone number: <input type="text" id="phone" value="<?= $phone; ?>" name="phone" placeholder="Maximum 1 0 digits" pattern="[0-9]{10}"></label></p>
                <?php
                     showMessage('phone')
                ?>
                <p>Preferred contact: 
                    <label><input type="radio" id="prefemail" name="preferred_contact" value="Email">Email</label>
                    <label><input type="radio" id="prefpost" name="preferred_contact" value="Post">Post</label>
                    <label><input type="radio" id="prefphone" name="preferred_contact" value="Phone" checked>Phone</label>
                    </p>
                  
        <!------------------------------------------------------------------------------------------------------------------------- -->

                <p><label for="moviechosen">Which movie do you want to choose ? <br><br> 
                        <select id="moviechosen" name="moviechosen">                
                            <option value="itmfl" <?= ($moviechosen == 'itmfl') ? 'selected' : '' ;?>>In the mood for love</option>
                            <option value="midsommar" <?= ($moviechosen == 'midsommar') ? 'selected' : '' ;?>>Midsommar</option>
                            <option value="ouatih" <?= ($moviechosen == 'ouatih') ? 'selected' : '' ;?>>Once upon a time in Holywood</option>
                            <option value="dune" <?= ($moviechosen == 'dune') ? 'selected' : '' ;?>>Dune</option>
                            <option value="coraline" <?= ($moviechosen == 'coraline') ? 'selected' : '' ;?>>Coraline</option>
                            <option value="lit" <?= ($moviechosen == 'lit') ? 'selected' : '' ;?>>Lost in translation</option>
                    </select>
                    </label></p>
                    <?php
                       showMessage('moviechosen')
                ?>
            <!-- Chosing ticket type -->
            <p><label for="ticketype">Which ticket type do you want to choose ? <br><br> 
                <select id="ticketype" name="option">                
                    <option value="single" <?= ($option == 'single') ? 'selected' : ''; ?>>Single (1 ticket)</option>
                    <option value="couple" <?= ($option == 'couple') ? 'selected' : ''; ?>>Couple (2 ticket)</option>
                    <option value="family" <?= ($option == 'family') ? 'selected' : ''; ?>>Family (3 ticket)</option>
                </select>
            </label></p>
           
            <!-- Chosing quantity -->
            <p><label>How many combo do you want to purchase ? <input type="number" id="quantity" value="<?= $quantity; ?>" name="quantity" placeholder="Insert" pattern="[a-zA-Z]{1,25}"></label></p>
            <?php
          showMessage('quantity')
                ?>
            <!-- Address: street, town, state, postcode -->
            <fieldset>
                <legend>Credit Card details: </legend>

                <p><label for="card_type">Credit Card type: 
                    <select id="card_type" name="cc_type">
                        <option value="" selected></option>
                        <option value="Visa" <?= ($cc_type == 'Visa') ? 'selected' : ''; ?>>Visa</option>
                        <option value="Mster" <?= ($cc_type == 'Mster') ? 'selected' : ''; ?>>Mastercard</option>
                        <option value="AE" <?= ($cc_type == 'AE') ? 'selected' : ''; ?>>American Express</option>
                        <option value="Dis" <?= ($cc_type == 'Dis') ? 'selected' : ''; ?>>Discover</option>
                    </select>
                </label></p>
                <?php
                     showMessage('cc_type')
                ?>
                <p><label>Name on your card: <input type="text" id="street" value="<?= $cc_name; ?>" name="cc_name" placeholder="Insert" pattern=".{1,40}"></label></p>
                <?php
                     showMessage('cc_name')
                ?>
                <p><label>Credit Card number: <input type="number" id="cardnumber" value="<?= $cc_number; ?>" name="cc_number" placeholder="Insert" pattern=".{1,20}"></label></p>
                <?php
                   showMessage('cc_number')
                ?>
                <p><label>Expired Date:</label><input type="text" value="<?= $cc_expiry_date; ?>" name="cc_expiry_date"></p>
                <?php
                showMessage('cc_expiry_date')
                ?>
                <p><label>Card verification Value:<input type="text" id="CVV" value="<?= $cvv; ?>" name="cvv" placeholder="Insert" pattern=".{1,40}"></label></p>
                <?php
                showMessage('cvv')
                ?>
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
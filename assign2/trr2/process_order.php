<!-----------------------------------  sanitize and validate data and store it in variables -------------------------------------------->
<?php
require_once("settings.php");
session_start();

    $errors = array(); // Initialize the errors array
    $valid_data = array(); // Initialize the validated data array

    ///// Sanitize and validate first name input///////
    $first_name = trim($_POST['first_name']);
    if (empty($first_name)) {
        $errors['first_name'] = 'Please enter your first name.';
    } else {
        $first_name = filter_var($first_name, FILTER_SANITIZE_STRING);
        if (!preg_match('/^[a-zA-Z\s]+$/', $first_name)) {
            $errors['first_name'] = 'Please enter a valid first name.';
        } else {
            $valid_data['first_name'] = $first_name;
        }
    }

    ////// Sanitize and validate last name input/////
    $last_name = trim($_POST['last_name']);
    if (empty($last_name)) {
        $errors['last_name'] = 'Please enter your last name.';
    } else {
        $last_name = filter_var($last_name, FILTER_SANITIZE_STRING);
        if (!preg_match('/^[a-zA-Z\s]+$/', $last_name)) {
            $errors['last_name'] = 'Please enter a valid last name.';
        } else {
            $valid_data['last_name'] = $last_name;
        }
    }

    // Sanitize and validate email input
    $email = trim($_POST['email']);
    if (empty($email)) {
        $errors['email'] = 'Please enter your email.';
    } else {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Please enter a valid email address.';
        } else {
            $valid_data['email'] = $email;
        }
    }

    // Sanitize and validate street input
    $street = trim($_POST['street']);
    if (empty($street)) {
        $errors['street'] = 'Please enter your street address.';
    } else {
        $street = filter_var($street, FILTER_SANITIZE_STRING);
        $valid_data['street'] = $street;
    }

    // Sanitize and validate state input
    $state = trim($_POST['state']);
    if (empty($state)) {
        $errors['state'] = 'Please select your state.';
    } else {
        $state = filter_var($state, FILTER_SANITIZE_STRING);
        $valid_data['state'] = $state;
    }

    // Sanitize and validate postcode input
    $postcode = trim($_POST['postcode']);
    if (empty($postcode)) {
        $errors['postcode'] = 'Please enter your postcode.';
    } else {
        $postcode = filter_var($postcode, FILTER_SANITIZE_NUMBER_INT);
        if (strlen($postcode) != 4) {
            $errors['postcode'] = 'Please enter a valid postcode.';
        } else {
            $valid_data['postcode'] = $postcode;
        }
    }

    // Sanitize and validate phone input
    $phone = trim($_POST['phone']);
    if (empty($phone)) {
        $errors['phone'] = 'Please enter your phone number.';
    } else {
        $phone = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
        if (strlen($phone) != 10) {
            $errors['phone'] = 'Please enter a valid phone number.';
        } else {
            $valid_data['phone'] = $phone;
        }
    }

    // Sanitize and validate preferred contact input
    $preferred_contact = trim($_POST['preferred_contact']);
    if (empty($preferred_contact)) {
        $errors['preferred_contact'] = 'Please select your preferred contact method.';
    } else {
        $preferred_contact = filter_var($preferred_contact, FILTER_SANITIZE_STRING);
        $valid_data['preferred_contact'] = $preferred_contact;
    }

    // Sanitize and validate movie chosen 
    $moviechosen = trim($_POST['moviechosen']);
        if(empty($moviechosen)) {
            $errors['moviechosen'] = 'Please select a movie.';
        } else {
            $moviechosen = filter_var($moviechosen, FILTER_SANITIZE_STRING);
            $valid_data['moviechosen'] = $moviechosen;
        }
    
    // Sanitize and validate quantity input
    $quantity = trim($_POST['quantity']);
    if (empty($quantity)) {
        $errors['quantity'] = 'Please enter the quantity.';
        } else {
        $quantity = filter_var($quantity, FILTER_SANITIZE_NUMBER_INT);
        if (!filter_var($quantity, FILTER_VALIDATE_INT) || $quantity <= 0) {
        $errors['quantity'] = 'Please enter a valid quantity.';
        } else {
        $valid_data['quantity'] = $quantity;
        }
        }
        
        
        // Sanitize and validate CC type input
        $cc_type = trim($_POST['cc_type']);
        if (empty($cc_type)) {
        $errors['cc_type'] = 'Please select your credit card type.';
        } else {
        $cc_type = filter_var($cc_type, FILTER_SANITIZE_STRING);
        $valid_data['cc_type'] = $cc_type;
        }
        
        // Sanitize and validate CC name input
        $cc_name = trim($_POST['cc_name']);
        if (empty($cc_name)) {
        $errors['cc_name'] = 'Please enter the name on your credit card.';
        } else {
        $cc_name = filter_var($cc_name, FILTER_SANITIZE_STRING);
        if (!preg_match('/^[a-zA-Z\s]+$/', $cc_name)) {
        $errors['cc_name'] = 'Please enter a valid name on your credit card.';
        } else {
        $valid_data['cc_name'] = $cc_name;
        }
        }
        
        // Sanitize and validate CC number input
        $cc_number = trim($_POST['cc_number']);
        if (empty($cc_number)) {
        $errors['cc_number'] = 'Please enter your credit card number.';
        } else {
        $cc_number = filter_var($cc_number, FILTER_SANITIZE_NUMBER_INT);
        if (!preg_match('/^[0-9]{15,16}$/', $cc_number)) {
        $errors['cc_number'] = 'Please enter a valid credit card number.';
        } else {
        $valid_data['cc_number'] = $cc_number;
        }
        }
        
        // Sanitize and validate CC expiry date input
        $cc_expiry_date = trim($_POST['cc_expiry_date']);
        if (empty($cc_expiry_date)) {
            $errors['cc_expiry_date'] = 'Please enter your credit card expiry date.';
        } else {
            $cc_expiry_date = filter_var($cc_expiry_date, FILTER_SANITIZE_STRING);
            $cc_expiry_date_arr = explode('/', $cc_expiry_date);
            if (count($cc_expiry_date_arr) != 2 || !preg_match('/^\d{2}\/\d{2}$/', $cc_expiry_date) || !checkdate($cc_expiry_date_arr[0], '01', '20' . $cc_expiry_date_arr[1])) {
                $errors['cc_expiry_date'] = 'Please enter a valid credit card expiry date (MM/YY).';
            } else {
                $valid_data['cc_expiry_date'] = $cc_expiry_date;
            }
        }
        
        // Sanitize and validate CVV input
        $cvv = trim($_POST['cvv']);
        if (empty($cvv)) {
        $errors['cvv'] = 'Please enter your CVV.';
        } else {
        $cvv = filter_var($cvv, FILTER_SANITIZE_NUMBER_INT);
        if (!preg_match('/^[0-9]{3,4}$/', $cvv)) {
        $errors['cvv'] = 'Please enter a valid CVV.';
        } else {
        $valid_data['cvv'] = $cvv;
        }
        }

// If errors are found, store them in a session variable and redirect to fix_order.php
if (isset($errors) && count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    $_SESSION['data'] = $valid_data;
    header('Location: fix_order.php?first_name=' . urlencode($_POST['first_name']) .'&last_name=' . urlencode($_POST['last_name']) . '&street=' . urlencode($_POST['street']) . '&state=' . urlencode($_POST['state']) . '&postcode=' . urlencode($_POST['postcode']) . '&phone=' . urlencode($_POST['phone']) . '&preferred_contact=' . urlencode($_POST['preferred_contact']) . '&moviechosen=' . urlencode($_POST['moviechosen']) . '&cc_type=' . urlencode($_POST['cc_type']) . '&cc_name=' . urlencode($_POST['cc_name']) . '&cc_number=' . urlencode($_POST['cc_number']) . '&cc_expiry_date=' . urlencode($_POST['cc_expiry_date']) . '&cvv=' . urlencode($_POST['cvv']) . '&email=' . urlencode($_POST['email']) .  '&quantity=' . urlencode($_POST['quantity']) . '&option=' . $_POST['option']);
    exit;
}else{
    $options_prices = array(
    'single' => 100000,
    'couple' => 175000,
    'family' => 350000,
);

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $street = $_POST['street'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $phone = $_POST['phone'];
    $preferred_contact = $_POST['preferred_contact'];
    $moviechosen = $_POST['moviechosen'];
    $cc_type = $_POST['cc_type'];
    $cc_name = $_POST['cc_name'];
    $cc_number = $_POST['cc_number'];
    $cc_expiry_date = $_POST['cc_expiry_date'];
    $cvv = $_POST['cvv'];
    $email = $_POST['email'];
    $quantity = $_POST['quantity'];
    $option = $_POST['option'];
    $date = date('Y-m-d H:i:s');

    
    $cost = $options_prices[$option] * $quantity;
    $sql = "INSERT INTO `orders` ( `order_cost`, `order_status`, `first_name`,`last_name`,`street`,`state`,`postcode`,`phone`,`preferred_contact`,`moviechosen`,`cc_type`,`cc_name`,`cc_number`,`cc_expiry_date`,`cvv`,`email`,`quantity`,`optionType`,`date`) 
    VALUES ('$cost','pending', '$first_name', '$last_name', '$street' , '$state' , '$postcode', '$phone' , '$preferred_contact', '$moviechosen' , '$cc_type', '$cc_name' , '$cc_number', '$cc_expiry_date' , '$cvv' , '$email' , '$quantity' , '$option' , '$date')";
    mysqli_query($con, $sql);
    header('Location: receipt.php?first_name=' . urlencode($_POST['first_name']) .'&last_name=' . urlencode($_POST['last_name']) . '&street=' . urlencode($_POST['street']) . '&state=' . urlencode($_POST['state']) . '&postcode=' . urlencode($_POST['postcode']) . '&phone=' . urlencode($_POST['phone']) . '&preferred_contact=' . urlencode($_POST['preferred_contact']) . '&moviechosen=' . urlencode($_POST['moviechosen']) . '&cc_type=' . urlencode($_POST['cc_type']) . '&cc_name=' . urlencode($_POST['cc_name']) . '&cc_number=' . urlencode($_POST['cc_number']) . '&cc_expiry_date=' . urlencode($_POST['cc_expiry_date']) . '&cvv=' . urlencode($_POST['cvv']) . '&email=' . urlencode($_POST['email']) .  '&quantity=' . urlencode($_POST['quantity']) . '&option=' . $_POST['option'] . '&cost='. $cost);
    exit;
}

// if no errors, go to receipt page
// $name = $_POST['name'];
// $email = $_POST['email'];
// $option = $_POST['option'];

// header('Location: receipt2.php?name=' . urlencode($name) . '&email=' . urlencode($email) . '&option=' . urlencode($option) . '&quantity=' . urlencode($_POST['quantity']) . '&cost=' . urlencode($cost));
// exit;




// $_SESSION['first_name'] = $first_name;
// $_SESSION['last_name'] = $last_name;
// $_SESSION['email'] = $email;
// $_SESSION['phone'] = $phone;
// $_SESSION['movie'] = $movie;
// $_SESSION['quantity'] = $quantity;
// $_SESSION['cost'] = $cost;

?> 





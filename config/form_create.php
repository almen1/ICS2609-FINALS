<?php
require_once "config.php";

$name = $contact = $amount = $payment_method = $option_1 = $option_2 = $comments = "";
$name_err = $contact_err = $amount_err = $payment_method_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Reopen the mysqli connection
    $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Validate Name
    $name = trim($_POST["name"]);
    if (empty($name)) {
        $name_err = "Please enter your name.";
    }

    // Validate Contact Information
    $contact = trim($_POST["contact"]);
    if (empty($contact)) {
        $contact_err = "Please enter your contact information.";
    }

    // Validate Amount
    $amount = trim($_POST["amount"]);
    if (empty($amount)) {
        $amount_err = "Please enter the donation amount.";
    } elseif (!is_numeric($amount)) {
        $amount_err = "Please enter a valid donation amount.";
    }

    // Validate Payment Method
    $payment_method = trim($_POST["payment_method"]);
    if (empty($payment_method)) {
        $payment_method_err = "Please select a payment method.";
    }

    // Validate at least one checkbox is checked
    if (!isset($_POST['website1']) && !isset($_POST['website2'])) {
        $payment_method_err = "Please select at least one option.";
    } else {
        // Set option values if checked
        $option_1 = isset($_POST['website1']) ? $_POST['website1'] : "";
        $option_2 = isset($_POST['website2']) ? $_POST['website2'] : "";
    }

    // Validate Comments
    $comments = trim($_POST["comments"]);

    // If no errors, insert data into database
    if (empty($name_err) && empty($contact_err) && empty($amount_err) && empty($payment_method_err)) {
        $sql = "INSERT INTO donation_form (name, contact_info, amount, payment_method, option_1, option_2, comments) VALUES (?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("ssissss", $param_name, $param_contact, $param_amount, $param_payment_method, $param_option_1, $param_option_2, $param_comments);

            $param_name = $name;
            $param_contact = $contact;
            $param_amount = $amount;
            $param_payment_method = $payment_method;
            $param_option_1 = $option_1;
            $param_option_2 = $option_2;
            $param_comments = $comments;

            if ($stmt->execute()) {
                echo "Donation Successful!.";
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        $stmt->close();
    }

    $mysqli->close(); // Close the connection after form processing
}
?>

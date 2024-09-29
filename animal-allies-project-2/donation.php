<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from the form
    $amount = $_POST['amount'];
    $upiId = $_POST['upiId'];

    // Validate the data as needed

    // Generate the payment link
    $paymentLink = "upi://pay?pa=" . urlencode($upiId) . "&pn=Animal%20Allies&tn=Donation&am=" . $amount . "&cu=INR";

    // Notify the donor (you can implement email or SMS notifications here)
    $message = "Click the link to make a donation: " . $paymentLink;

    // Replace with your email/SMS sending code here

    // Respond to the client
    echo json_encode(['status' => 'success', 'message' => 'Payment link sent to donor']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>

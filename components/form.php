<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

    // Validate inputs
    $errors = [];
    if (empty($name))
        $errors[] = 'Name is required';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors[] = 'Valid email is required';
    if (empty($phone))
        $errors[] = 'Phone number is required';

    // If no errors, process form
    if (empty($errors)) {
        // Here you would typically:
        // 1. Save to database
        // 2. Send email notification
        // 3. Redirect to thank you page

        echo '<div class="success-message">Thank you! We will contact you shortly.</div>';
    } else {
        echo '<div class="error-message">Please correct the following: ' . implode(', ', $errors) . '</div>';
    }
}
?>

<div class="expert-form">
    <div class="form-header">
        <h2>Free Expert Advice</h2>
    </div>

    <form class="contact-form" method="POST">
        <p class="discount-badge">Exclusive Discount</p>
        <div class="form-group">
            <div class="input-with-icon">
                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#7f8c8d">
                    <path
                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                </svg>
                <input type="text" id="name" name="name" placeholder="Your full name" required>
            </div>
        </div>

        <div class="form-group">
            <div class="input-with-icon">
                <svg class="input-icon" xmlns="http://www://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#7f8c8d">
                    <path
                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                </svg>
                <input type="email" id="email" name="email" placeholder="Your email address" required>
            </div>
        </div>

        <div class="form-group">
            <div class="input-with-icon">
                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#7f8c8d">
                    <path
                        d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z" />
                </svg>
                <input type="tel" id="phone" name="phone" placeholder="Your phone number" required>
            </div>
        </div>

        <button type="submit" class="submit-btn">
            Submit
            <img class='submit-arrow' src="../images/arrow.svg" alt="">
        </button>
    </form>
</div>
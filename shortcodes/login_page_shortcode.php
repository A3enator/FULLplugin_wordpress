<?php
/**
 * Plugin Name: Custom Login Page
 * Description: A shortcode to display a custom login page with a styled submit button.
 * Version: 1.0.1
 * Author: Your Name
 * Text Domain: custom-login-page
 */

// Define the shortcode function
function custom_login_shortcode() {
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the username and password from the POST request
        $username = isset($_POST['username']) ? sanitize_text_field($_POST['username']) : '';
        $password = isset($_POST['password']) ? sanitize_text_field($_POST['password']) : '';

        // Process login (replace this with your custom logic)
        if ($username === 'admin' && $password === '1234') {
            $message = '<p style="color: green;">ورود موفقیت‌آمیز!</p>';
        } else {
            $message = '<p style="color: red;">نام کاربری یا رمز عبور اشتباه است.</p>';
        }
    }

    // HTML for the login page
    $html = '
    <div style="width: 100%; max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
        <h2 style="text-align: center; color: #333;">ورود به سایت</h2>
        <form method="POST" style="display: flex; flex-direction: column;">
            <label for="username" style="margin-bottom: 10px;">نام کاربری:</label>
            <input type="text" id="username" name="username" style="padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;" required>
            
            <label for="password" style="margin-bottom: 10px;">رمز عبور:</label>
            <input type="password" id="password" name="password" style="padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;" required>
            
            <button type="submit" style="padding: 10px; background-color:rgb(11, 82, 4); color: white; border: none; border-radius: 4px; cursor: pointer;">ورود</button>
        </form>';
    
    // Add the message if it exists
    if (isset($message)) {
        $html .= $message;
    }

    $html .= '</div>';

    return $html;
}

// Register the shortcode in WordPress
add_shortcode('custom_login', 'custom_login_shortcode');
?>
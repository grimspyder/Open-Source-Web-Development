<?php
$pageTitle = "Portfolio Project_Contact Page";
$currentPage = 'contact';
$additionalStyles = '
<style>
    .input-control {
        margin-bottom: 20px;
    }
</style>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST['subject'] ?? '', ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');
    
}

include 'header.php';
?>
<section id="contactPage">
    
</section>
<section>
    <form id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="input-control">
            <label for="name">Full Name</label>
            <input id="name" name="name" type="text" required>
            <div class="error"></div>
        </div>
        <div class="input-control">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" required>
            <div class="error"></div>
        </div>
        <div class="input-control">
            <label for="subject">Subject</label>
            <input id="subject" name="subject" type="text" required>
            <div class="error"></div>
        </div>
        <br/>
        <div class="input-control">        
            <label for="message">Message:</label><br/>
            <textarea id="message" name="message" required></textarea><br/>
            <div class="error"></div>
        </div>
        <button id="submitContact" type="submit">Submit</button>
    </form>
</section>
<script src="js/contactPage.js"></script>
</body>
</html>
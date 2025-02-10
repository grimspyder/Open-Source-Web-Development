<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Portfolio'; ?></title>
    <?php if(isset($additionalStyles)) echo $additionalStyles; ?>
</head>
<body>
    <header>
        <div id="navigation">
            <nav class="navbar">
                <div class="tabs">
                    <a class="<?php echo ($currentPage == 'index') ? 'active' : ''; ?>" href="index.php">Homepage</a>
                    <a class="<?php echo ($currentPage == 'about') ? 'active' : ''; ?>" href="about.php">About Page</a>
                    <a class="<?php echo ($currentPage == 'projects') ? 'active' : ''; ?>" href="projects.php">Projects Page</a>
                    <a class="<?php echo ($currentPage == 'contact') ? 'active' : ''; ?>" href="contact.php">Contact Page</a>
                </div>
            </nav>
        </div>
    </header>
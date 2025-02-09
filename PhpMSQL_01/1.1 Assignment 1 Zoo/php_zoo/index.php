<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conversion: 1.1 Assignment 1 </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to the Zoo</h1>
    </header>
    <main>
        <section>
            <h2>Where the party animals never sleep and the best gossip happens at the watering hole!</h2>
            <h3>Click on the animals to learn more.</h3>
        </section>
        <div class="card-container">
            <?php foreach($cardData as $card): ?>
                <div class="card" onclick="window.open('<?php echo $card['url']; ?>', '_blank')">
                    <h3 class="card-heading"><?php echo $card['heading']; ?></h3>
                    <img class="card-image" src="<?php echo $card['Image']; ?>" alt="Card Image">
                    <p class="card-body"><?php echo $card['body']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer>
        <p>&copy; John Soler</p>
    </footer>
</body>
</html>
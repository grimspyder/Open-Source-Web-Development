<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endangered Species</title>
    <link rel="stylesheet" href="endangered.css">
</head>
<body>
    <header>
        <h1>Endangered Species</h1>
    </header>
    <main>
        <section>
            <h2>The once-bustling forest disco is losing its groove...</h2>
            <h3>Information about endangered species.</h3>
        </section>
        <div class="card-container">
            <?php foreach($endangeredData as $animal): ?>
                <div class="card">
                    <h3 class="card-heading"><?php echo $animal['heading']; ?></h3>
                    <img class="card-image" src="<?php echo $animal['Image']; ?>" alt="Card Image">
                    
                    <button class="accordion">Explore the Species</button>
                    <div class="panel">
                        <p class="card-body"><?php echo $animal['body1']; ?></p>
                    </div>
                    
                    <button class="accordion">Uncover the Mystery</button>
                    <div class="panel">
                        <p class="card-body"><?php echo $animal['body2']; ?></p>
                    </div>
                    
                    <button class="accordion">Unveil Their Story</button>
                    <div class="panel">
                        <p class="card-body"><?php echo $animal['body3']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 John Soler</p>
    </footer>
    <script>
        // Keep accordion functionality
        document.querySelectorAll('.accordion').forEach(button => {
            button.addEventListener('click', function() {
                this.classList.toggle('active');
                const panel = this.nextElementSibling;
                panel.style.maxHeight = panel.style.maxHeight ? null : panel.scrollHeight + "px";
            });
        });
    </script>
</body>
</html>
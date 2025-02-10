<?php
$pageTitle = "1.1 Assignment 2: Portfolio Project";
$currentPage = 'index';
include 'header.php';
?>
<article>
    <div id="greeting">
        <h1>Welcome to My Portfolio Website</h1>
        <img src="images/coder.jpg" alt="coding" id="codingImg"/>
        <p>Look around, Play a game, See what I have been working on.</p>
    </div>
    <br/>
</article>
<div class="gameGuessing">    
    <h2>Guess the number win a prize!(Maybe).</h2>
    <p>If you are bored play a guessing game.</p>
    <br/>
    <div id="game">
        <script id="guessingGame" src="guessTheNumber.js" defer></script>
    </div>    
</div>
<script src="js/guessTheNumber.js" defer></script>
</body>
</html>
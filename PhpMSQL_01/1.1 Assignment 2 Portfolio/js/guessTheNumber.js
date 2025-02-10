document.addEventListener("DOMContentLoaded", function () {
  console.log("DOM loaded");
  // Display Game
  function displayGame() {
    const numbergame = document.getElementById("game");
    numbergame.insertAdjacentHTML(
      "afterbegin",
      "<header>Guess a number between 1 and 100</header>" +
        "<input type='text' id='guessInput' placeholder='Enter your guess'>" +
        "<button id='startButton'>Start Game</button>" +
        "<button id='submitButton'>Submit Guess</button>"
    );

    // Hide User Input
    const guessInput = document.getElementById("guessInput");
    guessInput.style.display = "none";
    // Hide Submit Button
    const submitButton = document.querySelector("#submitButton");
    submitButton.style.display = "none";

    // declared but not initialized
    let randomNumber;

    // Start Game
    function startGame() {
      const button = document.querySelector("#startButton");
      button.addEventListener("click", () => {
        console.log("Game started");
        const guessInput = document.getElementById("guessInput");
        guessInput.style.display = "block";
        submitButton.style.display = "block";
        startButton.style.display = "none";
      });
      randomNumber = Math.floor(Math.random() * 100) + 1;
      console.log(randomNumber);
    }

    // Check Guess input
    function checkGuess() {
      // const guessInput = document.getElementById("guessInput");
      if (guessInput.value == randomNumber) {
        submitButton.setAttribute("disabled", true);
        alert(
          "Congratulations! You guessed the number!" +
            "  Your prize is to Start Over!"
        );
        location.reload();
      } else if (guessInput.value == "") {
        alert("Please enter a number");
      } else if (guessInput.value == NaN) {
        alert("Please enter a valid number");
      } else if (guessInput.value < 1 || guessInput.value > 100) {
        alert("Please enter a number between 1 and 100");
      } else if (guessInput.value > randomNumber) {
        alert("Your guess is too high. Try again.");
      } else if (guessInput.value < randomNumber) {
        alert("Your guess is too low. Try again.");
      }
    }

    // Submit button Event Listener for checkGuess()
    submitButton.addEventListener("click", checkGuess);

    startGame();
  }

  displayGame();
});

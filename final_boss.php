<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('img/bg-hero.JPG'); /* Background image */
      background-size: cover; /* Cover the entire body */
      background-position: center; /* Center the background image */
      background-color: #f5f5f5; /* Fallback background color */
      padding: 20px; /* Add padding to the body */
      margin: 0; /* Remove default margin */
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 50px;
      background-color: rgba(255, 255, 255, 0.9); /* semi-transparent white background */
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      color: #333; /* Text color */
    }

    h1 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    p {
      font-size: 18px;
      margin-bottom: 30px;
    }

    .spinner-border {
      margin-bottom: 20px;
    }

    #countdown {
      font-size: 24px;
      color: #888;
    }
  </style>
</head>
<body>
  <div class="container text-center mt-5">
    <h1>Thank you for ordering!</h1>
    <p>Your order is now being processed.</p>
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
    <p id="countdown">Your order will be on its way in <span id="count">5</span> seconds.</p>
  </div>

  <audio id="sound" src="bellbell.MP3"></audio>

  <script>
    // Countdown timer
    let seconds = 5;
    const countdownElement = document.getElementById('count');
    const countdown = setInterval(() => {
      seconds--;
      countdownElement.textContent = seconds;
      if (seconds === 0) {
        clearInterval(countdown);
        document.getElementById('countdown').textContent = "Your order is now on its way!";
        playSound();
      }
    }, 1000);

    function playSound() {
      const sound = document.getElementById('sound');
      sound.play();
    }
  </script>
</body>
</html>
<script>
  window.onload = function() {
    playSound();
  };

  function playSound() {
    const sound = document.getElementById('sound');
    sound.play();
  }
</script> 
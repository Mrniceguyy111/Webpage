<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Muy Pronto! - Hatchi.com.co</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            text-align: center;
        }

        .logo {
            max-width: 100%;
            height: auto;
        }

        .title {
            font-size: 4rem;
            margin-top: 2rem;
        }

        #countdown {
            font-size: 2rem;
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="{{asset('images/logo.png')}}" alt="Logo de la página" class="logo">
        <h1 class="title">¡Muy pronto!</h1>
        <div id="countdown"></div>
    </div>

    <script>
        function countdown() {
    const targetDate = new Date("August 01, 2023 00:00:00").getTime();
    const currentDate = new Date().getTime();
    const difference = targetDate - currentDate;
  
    if (difference > 0) {
      const seconds = Math.floor(difference / 1000) % 60;
      const minutes = Math.floor(difference / (1000 * 60)) % 60;
      const hours = Math.floor(difference / (1000 * 60 * 60)) % 24;
      const days = Math.floor(difference / (1000 * 60 * 60 * 24));
  
      document.getElementById("countdown").textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
    } else {
      document.getElementById("countdown").textContent = "¡La espera ha terminado!";
    }
  }
  
  countdown();
  setInterval(countdown, 1000);
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=home" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>projeto</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
</head>
<body>
    <!-- Cabeçalho, Navbar e Rodapé -->
    <div id="header-navbar-footer">
        <header class="d-flex flex-row-reverse ">
            <a href="form-login.php"> <button type="button" class="btn btn-outline-success">login <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M500-482q29-32 44.5-73t15.5-85q0-44-15.5-85T500-798q60 8 100 53t40 105q0 60-40 105t-100 53Zm220 322v-120q0-36-16-68.5T662-406q51 18 94.5 46.5T800-280v120h-80Zm80-280v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Zm-480-40q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM0-160v-112q0-34 17.5-62.5T64-378q62-31 126-46.5T320-440q66 0 130 15.5T576-378q29 15 46.5 43.5T640-272v112H0Zm320-400q33 0 56.5-23.5T400-640q0-33-23.5-56.5T320-720q-33 0-56.5 23.5T240-640q0 33 23.5 56.5T320-560ZM80-240h480v-32q0-11-5.5-20T540-306q-54-27-109-40.5T320-360q-56 0-111 13.5T100-306q-9 5-14.5 14T80-272v32Zm240-400Zm0 400Z"/></svg></button></a>
        </header>
        <nav id="navbar">
            <ul>
                <li><a href="inicio.php">Home <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg></li>
                <li><a href="listagem-cards.php">localizações <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg></a></li>
                
            </ul>
        </nav>
        <div id="toggle-nav"><div id="ponto" >
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </div></div>
    </div>

    <!-- Conteúdo principal -->
   

    <script>
        // JavaScript para animação da navbar
        document.addEventListener("DOMContentLoaded", () => {
            const toggleNav = document.getElementById("toggle-nav");
            const navbar = document.getElementById("navbar");

            toggleNav.addEventListener("click", () => {
                navbar.classList.toggle("show");
            });
        });

    
    </script>



    <style>
    :root[data-theme="light"] {
      color-scheme: light;
      --text: black;
      --background: white;
    }
    :root[data-theme="dark"] {
      color-scheme: dark;
      --text: white;
      --background: black;
    }   

    body {
      color: var(--text);
      background: var(--background);

    }
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212;
            color: #f0f0f0;
            background-image: url(https://images2.alphacoders.com/544/544227.jpg);
        }

        header {
            background-color: #1f1f1f;
            color: #f0f0f0;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        main {
            padding: 2rem;
            text-align: center;
        }

        footer {
            background-color: #1f1f1f;
            color: #f0f0f0;
            text-align: center;
            padding: 1rem;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

    
        #navbar {
            position: fixed;
            top: 60px;
            right: 1860px;
            height: 100%;
            width: 13vw;
            background-color: rgba(115, 115, 115, 0.212);
            box-shadow: -4px 0 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            padding: 1vw 0.9vw 1vw 0.5vw;
            transition: right 0.3s ease-in-out;
            backdrop-filter: blur(1vw);
        }

        #navbar.show {
            right: 1650px;
        }

        #navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #navbar ul li {
            margin: 1rem 0;
        }

        #navbar ul li a {
            color: #f0f0f0;
            text-decoration: none;
            font-size: 1.2rem;
            transition: color 0.2s;
        }

        #navbar ul li a:hover {
            color: #1db954; /* Verde Spotify */
        }

    
        #toggle-nav {
            position: fixed;
            top: 1rem;
            left: 1rem;
            background-color: #1f1f1f;
            color: #f0f0f0;
            border: none;
            font-size: 1.5rem;
            padding: 0.5rem 1rem;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.2s;
        }

        #toggle-nav:hover {
            background-color: #1db954;
        }


        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }


        #ponto {
            animation: rotar 3s erase-in-out;
        }

        @keframes rotar {
            from {
                transform: rotate(0deg);
            } to {
                transform: rotate(360deg);
            }
        }

        
        
        @media (max-width: 600px) {
            main {
                padding: 1rem;
            }

            #navbar ul li a {
                font-size: 1rem;
            }
        }
        
       

    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php
session_start();
require "logica-autenticacao.php";


$titulo = "Autenticação";

?>
<?php
    require('header.php');
?>
<style>
     .form-container {
            margin-top: 25%;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            
            padding: 5vw;
            background-color: rgba(0, 0, 0, 0.1); 
            border-radius: 1vw;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(1vw);
            font-weight: bolder;
            color: black;
        }

        form {
            width: 100%;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 1vw;
            font-size: 0.9vw;
        }

        .form-group label {
            font-size: 1vw;
            margin-bottom: 0.5vw;
            color: #e0e0e0; 
        }

        .form-group input {
            margin-top: 1vw;
            padding: 0.5vw;
            font-size: 1em;
            border-radius: 0.5vw;
            background-color: rgba(182, 182, 182, 0.089); 
            color: #e0e0e0; 
            backdrop-filter: blur(1vw);
            transition: 70ms;
          
        }

        .form-group input:focus {
            transform: scale(1.1);
            border-color: #019eb9; 
            outline: none;
        }

        .form-group button {
            padding: 0.7vw;
            background-color: #4c7faf; 
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.9s ease;
            margin-top: 50px;
        }

        .form-group button:hover {
            background-color: #049cc2; 
        }
        .main-home{
        padding-left: 15vw;
        padding-right: 15vw;
    }
</style>



<main class="d-flex align align-items-center justify-content-center main-home">
       <div class="main">
        <div class="form-container">
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="username">Usuário:</label>
                    <input type="text" id="username" name="email" required >
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="senha" required>
                </div>
                <div class="form-group">
                    <button type="submit">Entrar <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-120v-80h280v-560H480v-80h280q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H480Zm-80-160-55-58 102-102H120v-80h327L345-622l55-58 200 200-200 200Z"/></svg></button>
                </div>
            </form>
        </div>
       </div>
    </main>
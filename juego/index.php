<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./styles.css" rel="stylesheet">

</head>

<body>
    <div id="board">
        
        <div id="background">
            <div id="scoreContainer">
                
                Planes Sociales: <span id="score">0</span>
            </div>
        </div>
       
        <div id="player">
            <img src="./assets/player.png" alt="player dino">
        </div>
        <div id="cactus" class="animatedCactus">
            <img id="enemigo" src="enemigo1.gif" alt="obstacle">
        </div>
        <div id="edificio">
            <img src="./assets/mario.gif">
        </div>
        <div id="over" style="display: none;">
        <img src="./assets/gameover.gif" >
        </div>
    </div>
    <div class="menu">
        <button id='button-flow' class="button"></button>
    </div>
    <script src="./scripts.js"></script>
</body>


</html>


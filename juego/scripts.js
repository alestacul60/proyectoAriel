let score = 0;

const player = document.getElementById("player");

const scoreElement = document.getElementById("score");
const overs = document.getElementById('over');
const cactus = document.getElementById("cactus");
const ducha = document.getElementById("ducha");
const escoba = document.getElementById("escoba");
const panflin = document.getElementById("panflin");

const background = document.getElementById('background');

const buttonFlow = document.getElementById("button-flow")

const board = document.getElementById("board")

let gameLoop;

board.addEventListener("click", function () {
    player.classList.add("playerJump");
})

player.addEventListener('animationend', () => {
    player.classList.remove("playerJump");;
});

function checkCondition() {

if(cactus.offsetLeft < 1 ){
    var imagenes=new Array(
        './enemigo1.gif',
        './enemigo2.gif',
        './enemigo3.gif',
        './enemigo4.png'
    );

    var index = Math.floor((Math.random()*imagenes.length));
    document.getElementById("enemigo").src = imagenes[index];
    console.log(imagenes[index]);
}

    if (
        cactus.offsetLeft < (player.offsetLeft + 49)
        && cactus.offsetLeft > player.offsetLeft
        && (player.offsetTop >= (cactus.offsetTop - player.offsetHeight))
    ) {
        lostGame();
    }
    gameLoop = requestAnimationFrame(checkCondition)
}

let scoreInterval;

function lostGame() {

    
    overs.style.display = "";

    cancelAnimationFrame(gameLoop)
    pauseGame();
    buttonFlow.classList.add("reset")

}

function pauseGame() {
    cactus.style.animationPlayState = 'paused';
    player.style.animationPlayState = 'paused';
    background.style.animationPlayState = 'paused';
    clearInterval(scoreInterval);
}

function resumeGame() {
    cactus.style.animationPlayState = 'running';
    player.style.animationPlayState = 'running';
    background.style.animationPlayState = 'running';
}

function resetScore() {
    score = 0;
    scoreElement.innerText = score;
    scoreInterval = setInterval(() => {
        score++;
        scoreElement.innerText = score;
    }, 1000)
}

function resetGame() {
      
    overs.style.display = "none";

    resetAnimation();
    resumeGame();
    resetScore();
    gameLoop = requestAnimationFrame(checkCondition);
}

buttonFlow.addEventListener('click', () => {
    if (buttonFlow.classList.contains('play')) {
        resumeGame();
        buttonFlow.classList.remove('play')
    }
    else if (buttonFlow.classList.contains('reset')) {
        resetGame();
        buttonFlow.classList.remove('reset')
    }
    else {
        pauseGame();
        buttonFlow.classList.add('play')
    }
})



function resetAnimation() {

    var imagenes=new Array(
        './enemigo1.gif',
        './enemigo2.gif',
        './enemigo3.gif'
    );

    var index = Math.floor((Math.random()*imagenes.length));
    document.getElementById("enemigo").src = imagenes[index];
    console.log(imagenes[index]);

    cactus.classList.remove("animatedCactus");
    player.classList.remove("playerJump");
    void cactus.offsetWidth;
    cactus.classList.add("animatedCactus");

   
    
}
window.addEventListener("load", () => {
 resetGame();
})



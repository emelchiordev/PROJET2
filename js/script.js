// Class USERS
class Player {
    score = 0
    currentScore = 0
    constructor(name) {
        this.name = name
    }
    getName() {
        return this.name
    }

    setScore(score) {
        this.score = score
    }

    getScore() {
        return this.score;
    }

    setCurrentScore(currentScore) {
        this.currentScore = currentScore
    }
    getCurrentScore() {
        return this.currentScore
    }

}


// CREATE PLAYER
const player1 = new Player('Player 1')
const player2 = new Player('Player 2')



//BIND VIEW ON ALL BUTTONS
const newGameButton = document.querySelector(".btn-new")
const rollDiceButton = document.querySelector(".btn-roll")
const holdButton = document.querySelector(".btn-hold")

//BIND VIEW ON PLAYER1 AND PLAYER2 CONTAINER AND HIDE DOT FOR PLAYER2
const playerOneView = document.querySelector(".playerone")
const playerTwoView = document.querySelector(".playertwo")
const ionGrid = document.querySelector("ion-grid")

//SET DEFAULT CURRENT DOT ON PLAYER1
playerTwoView.getElementsByTagName("span")[0].classList.add("ion-hide")

//BIND SIDE VIEW DICE
const sideView = document.querySelector(".dice").getElementsByClassName("side")




//CURENT PLAYER
let currentPlayer = player1

//REINIT GAME
const reinitGame = () => {
    playerOneView.getElementsByTagName("span")[0].classList.add("ion-hide")
    player1.setScore(0)
    player2.setScore(0)
    player1.setCurrentScore(0)
    player2.setCurrentScore(0)
    scoreViewP2.textContent = player2.getScore()
    scoreViewP1.textContent = player1.getScore()
    currentViewP1.textContent = player1.getCurrentScore()
    currentViewP2.textContent = player2.getCurrentScore()
    currentPlayer = player1
    setStyleCurrentPlayer()
}



// LISTENER ON ALL BUTTONS
newGameButton.addEventListener('click', () => {
    reinitGame()
})
rollDiceButton.addEventListener('click', () => {
    gameStart()
})
holdButton.addEventListener('click', () => {
    holdScore()
    changeCurrentPlayer()
})

// BIND ALL VIEW
const scoreViewP1 = document.querySelector(".score-p1")
const scoreViewP2 = document.querySelector(".score-p2")
const currentViewP1 = document.querySelector(".p1")
const currentViewP2 = document.querySelector(".p2")


// GAME START WHEN CLICK ON ROLL DICE
const gameStart = () => {

    const random = Math.floor(Math.random() * 6 + 1)
    changeSide(random)

    if (random === 1) {
        currentPlayer.setCurrentScore(0)
        updateCurrentView(currentPlayer)
        changeCurrentPlayer()
        console.log(currentPlayer)
    } else {
        currentPlayer.setCurrentScore(currentPlayer.getCurrentScore() + random)
    }
    updateCurrentView(currentPlayer)

}

const holdScore = () => {
    currentPlayer.setScore(currentPlayer.getScore() + currentPlayer.getCurrentScore())
    currentPlayer.setCurrentScore(0)
    if (currentPlayer === player1) {
        scoreViewP1.textContent = currentPlayer.getScore()
        currentViewP1.textContent = currentPlayer.getCurrentScore()
    } else {
        scoreViewP2.textContent = currentPlayer.getScore()
        currentViewP2.textContent = currentPlayer.getCurrentScore()
    }

    if (currentPlayer.getScore() >= 100) {
        window.alert("GAME OVER ! \n" + "The Winner is : " + currentPlayer.getName());
        console.log("Le joueur" + currentPlayer.getName() + "a gagné")
        reinitGame()
    }

}


// *** FUNCTION UTILS ***

//UPDATE CURRENT SCORE VIEW
const updateCurrentView = (currentPlayer) => {
    if (currentPlayer === player1) {
        currentViewP1.textContent = currentPlayer.getCurrentScore()
    } else {
        currentViewP2.textContent = currentPlayer.getCurrentScore()
    }
}

// CHANGE CURRENT PLAYER
const changeCurrentPlayer = () => {
    currentPlayer = currentPlayer === player1 ? player2 : player1
    setStyleCurrentPlayer()

}


// CHANGE SIDE OF ROLL
const changeSide = (sideNb) => {
    for (let i = 0; i < 6; i++) {
        sideView[i].classList.add("ion-hide")
    }
    sideView[sideNb - 1].classList.remove("ion-hide")
}

const setStyleCurrentPlayer = () => {
    if (currentPlayer === player1) {
        playerOneView.style.background = "#f7f7f7d3"
        playerTwoView.style.background = "#FFFFFF"
        ionGrid.style.background = "linear-gradient(to left, #FFFFFF 50%, #f7f7f7d3 50%)"
        playerOneView.getElementsByTagName("span")[0].classList.remove("ion-hide")
        playerTwoView.getElementsByTagName("span")[0].classList.add("ion-hide")
    } else {
        playerTwoView.style.background = "#f7f7f7d3"
        playerOneView.style.background = "#FFFFFF"
        ionGrid.style.background = "linear-gradient(to right, #FFFFFF 50%, #f7f7f7d3 50%)"
        playerTwoView.getElementsByTagName("span")[0].classList.remove("ion-hide")
        playerOneView.getElementsByTagName("span")[0].classList.add("ion-hide")
    }
}



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <title>Document</title>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <ion-app>
        <ion-content>
            <ion-grid>

                <ion-row class="ion-hide-lg-down ion-align-items-center ">
                    <ion-col size="12" class="ion-hide-lg-down btn">
                        <button class="btn btn-new">
                            <ion-icon name="add-circle-outline"></ion-icon>NEW GAME
                        </button>
                    </ion-col>
                </ion-row>

                <ion-row class=" ion-align-items-center ">
                    <ion-col size="12" size-lg="6" class="playerone ion-text-center ">
                        <ion-row class="ion-align-items-center">
                            <ion-col size='12'>
                                <h1>PLAYER 1 <span class="dot dot-player"></span>
                                </h1>
                            </ion-col>
                            <ion-col size='6' size-lg="12">
                                <div class="ion-text-center score score-p1">0</div>
                            </ion-col>
                            <ion-col size="6" size-lg="12">
                                <div class="score-wrapper">
                                    <h1 class="title-current">CURRENT</h1>
                                    <p class="score-current p1">0</p>
                                </div>
                            </ion-col>
                        </ion-row>
                    </ion-col>

                    <ion-col size="12" size-lg="6" class="playertwo ion-text-center">
                        <ion-row class="ion-align-items-center">
                            <ion-col size='12'>
                                <h1>PLAYER 2 <span class="dot dot-player"></span>
                                </h1>
                            </ion-col>

                            <ion-col size='6' size-lg="12">
                                <div class="ion-text-center score score-p2">0</div>
                            </ion-col>

                            <ion-col size="6" size-lg="12">
                                <div class="score-wrapper">
                                    <h1 class="title-current">CURRENT</h1>
                                    <p class="score-current p2">0</p>
                                </div>
                            </ion-col>
                        </ion-row>
                    </ion-col>
                </ion-row>

                <ion-row class="ion-hide-lg-down btn-bottom">
                    <ion-col size="12" class="ion-hide-lg-down btn">
                        <button class="btn btn-roll">
                            <ion-icon name="sync-outline"></ion-icon>ROLL DICE
                        </button>
                    </ion-col>
                    <ion-col size="12" class="ion-hide-lg-down btn">
                        <button class="btn btn-hold">
                            <ion-icon name="download-outline"></ion-icon>HOLD
                        </button>
                    </ion-col>
                </ion-row>

                <!-- ROW 1 NEW GAME-->

                <div class="dice-roll">
                    <div class="dice ion-text-center ">
                        <div class="side side1">
                            <div class="dot one"></div>
                        </div>
                        <div class="side side2 ion-hide">
                            <div class="dot tr-one"></div>
                            <div class="dot bl-one"></div>
                        </div>
                        <div class="side side3 ion-hide">
                            <div class="dot one"></div>
                            <div class="dot tr-one"></div>
                            <div class="dot bl-one"></div>
                        </div>
                        <div class="side side4 ion-hide">
                            <div class="dot tl-one"></div>
                            <div class="dot tr-one"></div>
                            <div class="dot br-one"></div>
                            <div class="dot bl-one"></div>
                        </div>
                        <div class="side side5 ion-hide">
                            <div class="dot one"></div>
                            <div class="dot tl-one"></div>
                            <div class="dot tr-one"></div>
                            <div class="dot br-one"></div>
                            <div class="dot bl-one"></div>
                        </div>
                        <div class="side side6 ion-hide">
                            <div class="dot ml-one"></div>
                            <div class="dot mr-one"></div>
                            <div class="dot tl-one"></div>
                            <div class="dot tr-one"></div>
                            <div class="dot br-one"></div>
                            <div class="dot bl-one"></div>
                        </div>
                    </div>
                </div>
            </ion-grid>

        </ion-content>

        <ion-tabs class="ion-hide-lg-up">

            <ion-tab-bar slot="bottom">
                <ion-tab-button onclick="reinitGame()">
                    <ion-icon name="add-circle-outline"></ion-icon>
                    <ion-label>NEW GAME</ion-label>
                </ion-tab-button>

                <ion-tab-button onclick="gameStart()">
                    <ion-icon name="sync-outline"></ion-icon>
                    <ion-label>ROLL DICE</ion-label>
                </ion-tab-button>

                <ion-tab-button onclick="holdScore();changeCurrentPlayer()">
                    <ion-icon name="download-outline"></ion-icon>
                    <ion-label>HOLD</ion-label>
                </ion-tab-button>
            </ion-tab-bar>

        </ion-tabs>

    </ion-app>
    <script src="./js/script.js"></script>
</body>

</html>
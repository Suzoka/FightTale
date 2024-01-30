<h1 class="turn">Joueur 1<br><span>Choisissez une action</span></h1>
<div class="joueur active">
    <img src="../img/sprites/<?php echo $_SESSION["joueur1"]->getId() ?>.png" alt="">
    <p class="infoPerso">HP <span class="vie"
            style="--pct: <?php echo $_SESSION["joueur1"]->getPourcentagePv() ?>%;"></span>
        <?php echo $_SESSION["joueur1"]->getPv() ?>&nbsp;/&nbsp;
        <?php echo $_SESSION["joueur1"]->getPvMax() ?>
    </p>
</div>

<div class="boutons">
    <a href="./fight?j1atk=true" class="bouton atk">Attaque</a>
    <button class="bouton item">Items</button>
    <a href="./fight?j1colere=true" class="bouton rage">Colère</a>
    <a href="./fight?j1resiste=true" class="bouton shield">Resiste</a>
</div>

<div class="joueur">
    <img src="../img/sprites/<?php echo $_SESSION["joueur2"]->getId() ?>.png" alt="">
    <p class="infoPerso">HP <span class="vie"
            style="--pct: <?php echo $_SESSION["joueur2"]->getPourcentagePv() ?>%;"></span>
        <?php echo $_SESSION["joueur2"]->getPv() ?>&nbsp;/&nbsp;
        <?php echo $_SESSION["joueur2"]->getPvMax() ?>
    </p>
</div>
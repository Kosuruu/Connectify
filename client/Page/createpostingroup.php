<?php
require_once '../TPL/header.php';
session_start();

$id = $_GET['id'];



?>

        <main class="main">
                <a class="iconRetour" href="../Page/publications.php"> <img src="../asset/iconRetour.svg" alt="iconRetour"> <button class="buttonRetour">Retour</button></a>
                <button class="buttonPublier1">PUBLIER</button>
                <div class="profileCreatPost">
                        <img src="../asset/IconProfile.svg" alt="Image de profile creat post" class="imageProfileCreatPost">
                        
                        <div class="nomPromoCreatPost">
                                <h3 class="textWhite">Tom Cardonnel</h3>
                                <p class="textGray">Promo</p>
                        </div>
                </div>
        <form action="http://localhost:4000/publication/add" method="POST" enctype="multipart/form-data">
                <div class="ajouterUnTitre"> 
                        <input type="hidden" value=<?=$id?> name="group_id">   
                        <input class="textWhite inputPost" type="text" placeholder="Ajouter titre" name="title">
                </div>
                <textarea class="textWhite inputDescritpion" type="text" placeholder="Ajouter une description" name="content"></textarea>
                
                <input name="picture" class="buttonPhotos" type="file" placeholder="Enter picture" accept=".jpeg, .jpg, .png">
                
                <button class="buttonPublier2">PUBLIER</button>
        </form>
        </main>
</body>
</html>
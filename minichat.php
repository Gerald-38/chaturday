<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Chat ur day</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
    <body>

        <h3>Chat ur day !</h3>
        <?php
            if (isset($_COOKIE['userPseudo']))
            {
                $valueNickname=$_COOKIE['userPseudo'];
            }
            else
            {
                $valueNickname='';
                            }
        ?> 
        
        <div class="envoi">
            <form action="minichat_post.php" method="POST">
                <p><label for="">Pseudo : <br><input type="text" name="nickname" value=<?php echo $valueNickname; ?>></label></p>
                <p><label for="">Moi je dis : <br><input type="textarea" name="userMessage" id="exampleTextarea" class="saisie"></label></p>
                <button type="submit" class="btn btn-outline-secondary">Envoyer</button>
                <p><a href="minichat.php">Rafraichir la page</a></p>
            </form>
        </div>

    
    <p><strong>Discussions</strong></p>
    
    <div class="conversations">
        <?php
        try
        {
            $bdd = new PDO('mysql:host=mysql-gnavarette.alwaysdata.net;dbname=gnavarette_bd;charset=utf8', '191463_gn', 'gn021975',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));;
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }

        $reponse = $bdd->query('SELECT * FROM messages ORDER BY id DESC');

        // On affiche chaque entrée une à une
        
        
        while ($donnees = $reponse->fetch())
        {
        ?>
            <p>
                <?php echo '<strong>' . htmlspecialchars($donnees['name']) . '</strong>' . ' : ' . htmlspecialchars($donnees['message']); ?><br />

            </p>
        <?php
        }

        $reponse->closeCursor(); // Termine le traitement de la requête

        ?>
    </div>    
        
    </body>
</html>

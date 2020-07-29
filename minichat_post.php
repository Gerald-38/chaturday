<?php
    $userName = $_POST['nickname'];
    $userText = $_POST['userMessage'];
        
    try
    {
        $bdd = new PDO('mysql:host=mysql-gnavarette.alwaysdata.net;dbname=gnavarette_bd;charset=utf8', '191463_gn', 'gn021975',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));;
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }

    if ($userName!='' AND $userText!='')
    {
        $req = $bdd->prepare('INSERT INTO messages(name, message) VALUES(:nom, :message_poste)');
        $req->execute(array(
        'nom' => $userName,
        'message_poste' => $userText
        ));
        setcookie('userPseudo', $userName, time() + 365*24*3600, null, null, false, true);


       
    }

   
    
    header('Location: minichat.php');
?>

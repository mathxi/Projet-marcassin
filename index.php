<?php session_start(); 
$_SESSION['prenom'] = 'Mathieu';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <h1>Entraînement sur le passage en $_POST</h1>
        <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/transmettre-des-donnees-avec-les-formulaires" >redirection cour Openclassroom</a>
        
        <form method="post" action="cible.php">

            <p>

                <input type="text" name="pseudo" placeholder="Test"/>  <br>  <br> 
                <?php$_session["pseudo"] = $pseudo?>
                <input type="password" name="password" /> <input type="submit"/>
            </p>

        </form>
        <form method="post" action="cible.php">

            <p>

                <textarea name="message" rows="8" cols="45">Votre message ici.</textarea>
            </p>

        </form>
        <form method="post" action="cible.php">

            <p>

                <select name="choix" >
                    <option selected="selected" value="moche">t'es moche</option>
                    <option value="pasTerrible">t'es pas terrible</option>
                    <option value="pasMal">T'es pas mal</option>
                    <option value="toutLeMondeSeRetourne">Tout le monde se retourne sur toi</option>
                </select>
            </p>

        </form>
    </body>
</html>

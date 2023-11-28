<?php
if (isset($_POST['valider'])){
    if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['phone']) AND isset($_POST['message']))
    {
        if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['phone']) AND !empty($_POST['message']) )
        {
            $nom=htmlspecialchars($_POST['name'])
            $email=htmlspecialchars($_POST['email'])
            $phone=htmlspecialchars($_POST['phone'])
            $message=htmlspecialchars($_POST['message'])
        
           echo "<h2> bonjour <b> $nom </b> merci pour votre message  </h2>"
        }

    }
}


?>
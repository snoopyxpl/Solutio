<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style_contact.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutio : mail envoyer</title>
</head>
<body>
    <h2>NOUS CONTACTER</h2>

    <?php
    

    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message="<strong>From :</strong>{$_POST['email']}<br>{$_POST['message']}<br><br><br>Respectueusement ".$_POST['name'].'.';
    $to="admi.solutio@gmail.com";
    $headers=array(
        'From'=> $_POST['email'],
        'Reply-To'=> "admi.solutio@gmail.com",
        'SMTP-Auth' => "true",
        'Content-Type'=>'text/html', //?
        "Username" => "admi.solutio@gmail.com",
        "Password" => "pjqifchxtobjdejv", //changer de mot de passe
    );
    $sentMail=mail($to,$subject,$message,$headers);
    
    if(!empty($_POST['message'])){
        if($sentMail){
            echo "Your email has been sent successfully !"; //mettre en fr
        }else{
            echo "Error !!!";//mettre en fr
        }
    }
    ?>

    

   

</body>
</html>
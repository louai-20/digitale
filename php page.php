<?php

$name = $_POST['Nom et Prénom '];
$email = $_POST['E-Mail'];
$subject = $_POST['Objet'];
$message = $_POST['Message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "louailalaoui7@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'
<!DOCTYPE.html>
<html lang = "fr" dir="ltr">
<head>
  <title>Digital World</title>
  <link rel="icon" type="image/jpg" href="logo dégitale.png">
  <meta charset = "utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
  rel="stylesheet"
/>
  
</head>


    <figure>
      <img src="welcome.png" width="1200px" height="600px"/>
    
   </figure>
   <p>Sur ce site web nous vous présentents nous services afin de vous aidez dans vous projets vous allez les retrovez nous services sous ce texte.</p>
   <ul>
    <li> Montage védio et Photos </li>
    <li> Dévelppement web et mobile </li>
    <li>conseption numérique</li>
    <li>Phtographier</li>
   </ul> 
   <p>Veuillez remplire ce formulaire afin de nous envoiyé votre demende </p>
  
   <form action="php page.php" method="post">
    <center>
     <h1>Contactez-nous</h1>
    </center>
    <div class="separation"></div>
    <div class="corps-formulaire">
      <div class="gauche">
        <div class="groupe">
          <label>Nom et Prénom </label>
          <input type="text" autocomplete="off" />
          <i class="fas fa-user"></i>
        </div>
        <div class="groupe">
          <label>E-Mail</label>
          <input type="text" autocomplete="off" />
          <i class="fas fa-envelope"></i>
        </div>
        <div class="groupe">
          <label>Objet</label>
          <input type="text" autocomplete="off" />
          <i class="fas fa-mobile"></i>
        </div>
      </div>

      <div class="droite">
        <div class="groupe">
          <label>Message</label>
          <textarea placeholder="Saisissez ici..."></textarea>
      </div>
      
    

    <div class="pied-formulaire" align="center">
      <button>Envoyer la demande</button>
    </div>
  </form>

  <center> <h3>Suivez moi sur nous réseaux sociaux</h3>
      <a href="https://www.instagram.com/louai_thoughtes/">  Instagrame  </a>
      
      <br><a href="https://m.facebook.com/people/Louais-Thoughts/100069740110187/">  facebook  </a></br>

<p>
<q>
  This site is currently in progress, and thank you for your visit, Hope you come back soon to see what's new!
</q>
</p>
<p>Thank you for visiting</p> 
 <div>
  <figure>
   <img src="atante a.jpeg"  width="140px" height="126px"/>
  </figure>
 </div> 
</center>
 </body>
</html>
';


?>
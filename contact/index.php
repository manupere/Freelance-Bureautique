<?php include 'sendmail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire contact Emmanuel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->
    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Adresse, Cité, Pays</div>
        <div><i class="fas fa-envelope"></i>contact@email.com</div>
        <div><i class="fas fa-phone"></i>+213 0000 000 000</div>
        <div><i class="fas fa-clock"></i>Dim - Ven du 08h00 a 16h00 </div>
      </div>
      <div class="contact-form">
        <h2>Contact</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder=" Votre Nom" required>
          <input type="email" name="email" class="text-box" placeholder=" Votre Email" required>
          <textarea name="message" rows="5" placeholder=" Votre Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Envoyer">
        </form>
      </div>
    </div>
    <!--contact section end-->
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

  </body>
</html>
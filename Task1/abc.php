<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Form</title>
</head>
<body>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['msg'];
    //   $toEmail = 'divyansh@theindianconclave.in';
      $toEmail = "garvitashukla313@gmail.com";
      $headers = "From: $email";
      
      if (mail($toEmail, $subject, $message, $headers)) {
        echo '<div class="alert alert-success">Sent successfully!!!</div>';
      } else {
        echo '<div class="alert alert-danger">Sorry!!!!</div>';
      }
    }
?>


    <div class="container contact-form mt-5">           
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">                
               <div class="row">                   
                    <div class="col-md-6">
                        <div class="contact-image form-group">
                            <img src="logo.png" class="img-fluid" style="width:10rem; margin-left:35%" >
                         </div>
        
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email *" value="" required/>
                        </div>

                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject *" value="" required/>
                        </div>

                        <div class="form-group">
                            <textarea name="msg" class="form-control" placeholder="Your Message" style="width: 100%; height: 150px;"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Send Email</button>                   
                    </div>                  
                </div>
            </form>
    </div>
</body>
</html>
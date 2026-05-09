<?php
  include "conn.php";
  $message = "";

  if(isset($_POST['submit'])){

  $firstname =$_POST['first_name'];
  $lastname = $_POST ['last_name'];
  $email = $_POST ['email'];
  $message = $_POST['message'];

    if(!empty($firstname) || !empty($lastname) || !empty($email) || !empty($message)){
      $sql = "INSERT INTO contact (first_name, last_name, email, message) VALUES ('$firstname', '$lastname', '$email', '$message')";
      
      //para pumasok sa database kailangan palagi lagyan ng sql, saka sql conn->query($sql) para gumana yung database
      //saka kailangan may include na conn


        if($conn->query($sql) === TRUE){
          $message = "<div class='alert alert-success'> Message sent successfully, $firstname!</div>";
        }
        else{
          $message = "<div class='alert alert-danger'> Error: ". $conn-error ."</div>";
        }
    }
    else{
      $message = "The message is sent $firstname!";
    }
  }

?>

 

<div id="contact" class="container my-5">
  <div class="row align-items-stretch border border-2 border-success rounded-4 p-4">

    <?php if($message != ""){ ?>
        <div class="alert alert-info">
            <?php echo $message; ?>
        </div>
    <?php } ?>

    <div class="col-md-4 mb-4">
      <h2 class="mb-3">Get in Touch</h2>
      <h5 class="mb-3">I'd like to hear from you!</h5>

      <p>If you have any inquiries or just want to say hi,
        please use the contact form!
      </p>

      <p class="mt-4">
        <img src="../img/mail.png" width="25"> vhinzeventura8@gmail.com
      </p>

      <div class="mt-4 d-flex gap-3 ">
        <img src="../img/github.png" class="img-size" alt="" style="width: 40px;">
        <img src="../img/facebook.png" class="img-size" alt="" style="width: 40px;">
        <img src="../img/instagram.png" class="img-size" alt="" style="width: 40px;">
      </div>

    </div>

    <div class="col-md-4 mb-4">
      <form method="POST">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name">
          </div>
          <div class="col">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email">
        </div>

        <div class="mb-3">
          <label class="form-label">Message</label>
          <textarea class="form-control" rows="4" name="message"></textarea>
        </div>

        <button type="submit" class="btn btn-success px-4 rounded" name="submit">
          Send
        </button>
      </form>
    </div>

    <div class="col-md-4">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15465.743995039875!2d121.0010849!3d14.2860816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d61403b4fe75%3A0x38fe2af5806005cf!2sEmmanuel%20Animal%20Clinic!5e0!3m2!1sen!2sph!4v1771310056559!5m2!1sen!2sph"
        width="100%"
        height="100%"
        style="border:0; min-height:350px;"
        allowfullscreen=""
        loading="lazy">
      </iframe>
    </div>

  

  </div>
</div>
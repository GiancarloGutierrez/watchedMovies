
<main class ="col-7 col-m-12">
  <section>
    <h1> Register </h1>
  <form action="code/user_insert.php" method="POST">
      <div class="mb-3">
        <label for="emailhtml" class="form-label">Email address</label>
        <input type="email" class="form-control" id="emailhtml" aria-describedby="emailHelp" name="username">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="passwordhtml" class="form-label">Password</label>
        <input type="password" class="form-control" id="passwordhtml" name="password">
      </div>
      <div class="mb-3">
        <label for="fnamehtml" class="form-label">First Name</label>
        <input type="text" class="form-control" id="fnamehtml" name="firstName">
      </div>
      <div class="mb-3">
        <label for="lnamehtml" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lnamehtml" name="lastName">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </section>
</main>
<?php
session_start();
if(isset($_SESSION['errorMessage'])){
echo ("<SCRIPT> alert('".$_SESSION['errorMessage']."'); </SCRIPT>");
unset($_SESSION['errorMessage']);
}
?>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

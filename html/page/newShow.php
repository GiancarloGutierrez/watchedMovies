
<main class ="col-7 col-m-12">
  <section>
    <h1> New Show Review </h1>
  <form action="code/show_insert.php" method="POST">
      <div class="mb-3">
        <label for="showTitleHtml" class="form-label">Show Name</label>
        <input type="text" class="form-control" id="showTitleHtml" name="title">
      </div>
      <div class="mb-3">
        <label for="ratingHtml" class="form-label">Rating(1-5)</label>
        <select name = "rating" id = "ratingHtml" class = "form-control">
          <option value = 1>1 star</option>
          <option value = 2>2 star</option>
          <option value = 3>3 star</option>
          <option value = 4>4 star</option>
          <option value = 5>5 star</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="descriptionHtml" class="form-label">Description</label>
        <input type="text" class="form-control" id="descriptionHtml" name="description">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </section>
</main>
<?php
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
-->

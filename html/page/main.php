<main class ="col-7 col-m-12">
<h1> Show Reviews </h1>
<?php
        require_once('./code/show/show2.php');
        $show = new Show();
        $shows = $show->getMyShows($_SESSION["user_id"]);  
        if($shows){
        $arrlength = count($shows);

        for($x = 0; $x < $arrlength; $x++) {            
            echo '<Section>
                    <h4>'.$shows[$x]->getShowTitle() . '</h4>
                    <br/> <h4>Rating: ' . $shows[$x]->getShowRating(). ' star </h4>
                    <br/>'.$shows[$x]->getShowDescription().'
                    <a href ="./code/show_delete.php?showId='.$shows[$x]->getShowID().'" title="Delete show '.$shows[$x]->getShowTitle().'"> <h4>Delete</h4></a>
                  </section>';
        }
      }

      if(isset($_GET["showDeleted"])){
        if($_GET["showDeleted"]=="true"){
        echo("<script>window.onload = function(){alert('Show Deleted');}</script>");
        }
        else{
          echo("<script>window.onload = function(){alert('Show Not Deleted');}</script>");
        }
      }
      ?>
</main>
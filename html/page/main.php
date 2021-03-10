<main class ="col-7 col-m-12">
<h1> Show Reviews </h1>
<?php
        require_once('./code/show/show2.php');

        $show = new Show();
        $shows = $show->getAllShows();  

        $arrlength = count($shows);

        for($x = 0; $x < $arrlength; $x++) {            
            echo '<Section>
                    <h4>'.$shows[$x]->getShowTitle() . '</h4>
                    <br/> <h4>Rating: ' . $shows[$x]->getShowRating(). ' star </h4>
                    <br/>'.$shows[$x]->getShowDescription().'
                  </section>';
        }
      ?>
</main>
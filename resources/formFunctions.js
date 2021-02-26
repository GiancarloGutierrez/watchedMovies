window.addEventListener('load',addListeners())

function addListeners() {
    //listen to video game name, return reaction based on length
    document.getElementById('favVideoGameName').addEventListener('change',
    function(){
        $fvgnLength = document.getElementById('favVideoGameName').value.length;
        $fvgReact = "";

        if($fvgnLength ==0){
            $fvgReact = "";
        }
        else if ($fvgnLength >0 && $fvgnLength <= 5){
            $fvgReact = "short";
        }
        else if ($fvgnLength > 5 && $fvgnLength <=12){
            $fvgReact = "average";
        }
        else{
            $fvgReact = "long";
        }

        document.getElementById('favNameReaction').value = $fvgReact;
        totalWrite();
    });

    //listen to video game price, return reaction based on value
    document.getElementById('favVideoGamePrice').addEventListener('change',
    function(){
        $fvgPrice = 
        parseFloat(document.getElementById('favVideoGamePrice').value);
        $fvgReact = "";

        if(isNaN($fvgPrice) || $fvgPrice < 0.01){
            document.getElementById('favVideoGamePrice').value = 0;
        }
        else if($fvgPrice >= 0.01 && $fvgPrice <= 10){
            $fvgReact = "cheap";
            document.getElementById('favVideoGamePrice').value = 
            $fvgPrice.toFixed(2);
        }
        else if($fvgPrice> 10 && $fvgPrice <= 20){
            $fvgReact = "reasonable";
            document.getElementById('favVideoGamePrice').value = 
            $fvgPrice.toFixed(2);
        }
        else if($fvgPrice> 20 && $fvgPrice < 60){
            $fvgReact = "expensive";
            document.getElementById('favVideoGamePrice').value = 
            $fvgPrice.toFixed(2);
        }
        else {
            $fvgReact = "ridiculous";
            document.getElementById('favVideoGamePrice').value = 
            $fvgPrice.toFixed(2);
        }

        document.getElementById('favPriceReaction').value = $fvgReact;
        totalWrite();
    })

    //listen to hours played, display reaction based on value
    document.getElementById('favVideoGameTime').addEventListener('change',
    function(){
        $fvgTime = 
        parseFloat(document.getElementById('favVideoGameTime').value);
        $fvgReact = "";

        if(isNaN($fvgTime) || $fvgTime < 0){
            document.getElementById('favVideoGameTime').value = 0;
        }
        else if($fvgTime > 0 && $fvgTime <= 1){
            $fvgReact = "quick";
            document.getElementById('favVideoGameTime').value =
            $fvgTime.toFixed(2);
        }
        else if($fvgTime > 1 && $fvgTime <= 5){
            $fvgReact = "average";
            document.getElementById('favVideoGameTime').value =
            $fvgTime.toFixed(2);
        }
        else if($fvgTime > 5 && $fvgTime <= 80){
            $fvgReact = "long";
            document.getElementById('favVideoGameTime').value =
            $fvgTime.toFixed(2);
        }
        else {
            $fvgReact = "forever";
            document.getElementById('favVideoGameTime').value =
            $fvgTime.toFixed(2);
        }

        document.getElementById('favTimeReaction').value = $fvgReact;
        totalWrite();
    })

    //toggle visible fields based on difficulty
    document.getElementById("difficulty1").addEventListener('change', 
    function(){
        $radioValue = document.getElementById('difficulty1').value;
        if($radioValue == 0){
            document.getElementById('favVideoGameExtra').style.display = 
            "none";
            document.getElementById('favVideoGameReview').style.display =
            "none";
        }
    });

    document.getElementById('difficulty2').addEventListener('change', 
    function(){
        $radioValue = document.getElementById('difficulty2').value;
        if($radioValue == 1){
            document.getElementById('favVideoGameExtra').style.display =
             "block";
            document.getElementById('favVideoGameReview').style.display =
             "none";
        }
    })

    document.getElementById('difficulty3').addEventListener('change', 
    function(){
        $radioValue = document.getElementById('difficulty3').value;
        if($radioValue == 2){
            document.getElementById('favVideoGameExtra').style.display =
             "block";
            document.getElementById('favVideoGameReview').style.display =
             "block";
        }
    })
}

function totalWrite(){
    $react1 = document.getElementById('favNameReaction').value;
    $react2 = document.getElementById('favPriceReaction').value;
    $react3 = document.getElementById('favTimeReaction').value;

    document.getElementById('favNameReactionTotal').value = $react1;
    document.getElementById('favPriceReactionTotal').value = $react2;
    document.getElementById('favTimeReactionTotal').value = $react3;
}
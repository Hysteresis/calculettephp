
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculette</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="py-4">Calculette PHP</h1>

    <div class="container text-center">
        <div class="row">
            <div class="col-6 mx-auto rounded align-self-center bg-success bg-gradient py-2">
                <form action="#" method="post" id="formulaire">
                    <label for="chiffre1">Saisir le chiffre 1 :</label>
                    <input type="text" name="chiffre1">
                    <br>

                    <Label for="operateur">Saisir l'operateur :</Label>
                    <input type="text" name="operateur">
                    <br>

                    <label for="chiffre2">Saisir le chiffre 2 :</label>
                    <input type="text" name="chiffre2">
                    <br><br><br>

                    <input type="submit">
                </form>

            </div>
        </div>
    </div>
    
<?php 

    $operateur = $_POST['operateur'];
    $chiffre1 = $_POST['chiffre1'];
    $chiffre2 = $_POST['chiffre2'];
    $resultat = 0;
    echo "<br>";
?>
<div class="container text-center">
    <div class="row">
        <div class="col  align-self-center">
                <?php 
                    if ($operateur == "+") {
                        $resultat = $chiffre1 + $chiffre2;
                        // echo "<div class="">" $chiffre1 . " + " . $chiffre2 . " = " . $resultat . "</div>";
                        echo '<div class="test">' . $chiffre1 . " + " . $chiffre2 . " = " . $resultat . '</div>';
                    } 

                    if ($operateur == "*") {
                        $resultat = $chiffre1 * $chiffre2;
                        echo '<div class="test">' . $chiffre1 . " x " . $chiffre2 . " = " . $resultat . '</div>';
                    } 
                
                    if ($operateur == "/" && $chiffre2 !== 0) {
                        $resultat = $chiffre1 / $chiffre2;
                        echo '<div class="test">' . $chiffre1 . " / " . $chiffre2 . " = " . $resultat . '</div>';
                    } 
                
                    if ($operateur == "/" && $chiffre2 == 0){
                        echo "div by 0 : impossible";
                    }
                
                    if ($operateur == "-") {
                        $resultat = $chiffre1 - $chiffre2;
                        echo '<div class="test">' . $chiffre1 . " - " . $chiffre2 . " = " . $resultat . '</div>';
                    } 
                ?>
            
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
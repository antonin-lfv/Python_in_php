<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Polynomes</title>
    <style>
        input[type=number] {
            background-color: rgb(231,231,231);
            border: none;
        }
    </style>
</head>


<body style="background-color:rgb(180,200,200);">

<h1><div style="text-align: center"><span style="font-family: fantasy; ">Polynome du troisième degré</span></div></h1>

<div id="container" style="text-align: center">
    <form action="" method="get">
        <style>
            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        </style>
        <label for="nombre"><span style="font-family: American Typewriter; ">Saisir les coefficients : </span></label>
        <input type="number" name="x1" min="-99" max="99" style="width:15px" ><h>x³ + </h>
        <input type="number" name="x2" min="-99" max="99" style="width:15px"><h>x² + </h>
        <input type="number" name="x3" min="-99" max="99" style="width:15px"><h>x + </h>
        <input type="number" name="x4" min="-99" max="99" style="width:15px">
        &nbsp &nbsp<input type="submit" value="Tracer">
    </form>
</div>

<?php  /* récupération des coefficients */

$x1 = (int) $_GET["x1"];
$x2 = (int) $_GET["x2"];
$x3 = (int) $_GET["x3"];
$x4 = (int) $_GET["x4"];

?>

<?php  /* résultat de la fonction tracée*/

$output1 = shell_exec("python3 /Users/antoninlefevre/Downloads/langages_informatiques/Python/Projets/python_in_php/python_in_php/courbe_trace/courbe_trace.py -p ".$x1." -o ".$x2." -s ".$x3." -d ".$x4);

?>
<br>
<br>

<?php /* Affichage de l'expression de la fonction et de sa dérivée */

echo "<div align = 'center'><span style='font-family: American Typewriter; '>Courbe de la fonction f(x) = $x1 x³ + $x2 x² + $x3 x + $x4 </span></div>";

?>

<p><div align = 'center'><span style='font-family: American Typewriter; '> Dérivée f '(x) = <?php echo 3*$x1 .'x² +'. 2*$x2 .'x +'. $x3 ?></span></div></p>



<br>
<br>
<!-- affichage de l'allure de la fonction -->
<div align = 'center'>
    <img src='my_plot.png'>
</div>

</body>
</html>


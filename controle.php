<?php 
session_start();
include("conexao.php");

$_SESSION['lav'] = $_GET['lav'];
$quadrado = $_SESSION['lav'];
$cont = $_GET['val'];

$quest = $_GET['quest'];
$naomar = "nmar.png";
$x = "X.png";
$o = "O.png";




$sql = "SELECT * FROM `tb_questoes` WHERE que_status like '0' ORDER BY RAND() LIMIT 1;";
$result = mysqli_query($conexao,$sql);
$linha = $result->fetch_assoc();

if (isset($_GET['resposta'])) {
    //Verificando se a alguma coisa na resposta
    $resp = $_GET['resposta'];
    $respo = $_GET['respo'];

    echo $resp."   ".$respo;

    if ($resp == $respo) {
        // Se ele acertar, passa o cont e chama o metodo de acerto
        $quest = 1;

        verifiafoto($cont,$quadrado,$x,$o);
        echo "parou no acertar";

    }elseif ($resp == 'N') {
        //Se ele responder que não sa
        $quest = 1;
        $cont += 1;

        $_SESSION['cont'] = $cont;

       header('Location:index.php');
        echo "parou no n";
    }else {

        $quest = 1;
        $cont += 1;

        $_SESSION['cont'] = $cont;
       header('Location:index.php');
        echo "parou no nerro";
    }
}else{

    if ($quest == 0) {

    $_SESSION['id'] = $linha['que_id'];

    header('Location:index.php?a=1&lav='.$quadrado.'&val='.$cont.'&quest='.$quest.'');

}else {
    verifiafoto($cont,$quadrado,$x,$o);

}
}


function verifiafoto($cont,$quadrado,$x,$o){
    $cont += 1;
    $_SESSION['cont'] = $cont;
    // acrescentar ao cont, e definir qual imagem deve ser setada caso o usuario tenha acertado a questão
    if ($quadrado == 1) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteA'] = $x;
        }else {
            $_SESSION['permanenteA'] = $o;
        }
    }
    if ($quadrado == 2) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteB'] = $x;
        }else {
            $_SESSION['permanenteB'] = $o;
        }
        
    }
    if ($quadrado == 3) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteC'] = $x;
        }else {
            $_SESSION['permanenteC'] = $o;
        }
    }
    if ($quadrado == 4) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteD'] = $x;
        }else {
            $_SESSION['permanenteD'] = $o;
        }
    }
    if ($quadrado == 5) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteE'] = $x;
        }else {
            $_SESSION['permanenteE'] = $o;
        }
    }
    if ($quadrado == 6) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteF'] = $x;
        }else {
            $_SESSION['permanenteF'] = $o;
        }
    }
    if ($quadrado == 7) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteG'] = $x;
        }else {
            $_SESSION['permanenteG'] = $o;
        }
    }
    if ($quadrado == 8) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteH'] = $x;
        }else {
            $_SESSION['permanenteH'] = $o;
        }
    }
    if ($quadrado == 9) {
        if ($cont % 2 != 0) {
            $_SESSION['permanenteI'] = $x;
        }else {
            $_SESSION['permanenteI'] = $o;
        }
    }
    // verificar quem ganhou
    if ($_SESSION['permanenteA'] == $x && $_SESSION['permanenteB'] == $x && $_SESSION['permanenteC'] == $x ) {
        $_SESSION['ganhou'] = "x";
    }else{

    }
    if ($_SESSION['permanenteD'] == $x && $_SESSION['permanenteE'] == $x && $_SESSION['permanenteF'] == $x ) {
        $_SESSION['ganhou'] = "x";
    }else{

    }
    if ($_SESSION['permanenteG'] == $x && $_SESSION['permanenteH'] == $x && $_SESSION['permanenteI'] == $x ) {
        $_SESSION['ganhou'] = "x";
    }else{

    }
    if ($_SESSION['permanenteA'] == $x && $_SESSION['permanenteD'] == $x && $_SESSION['permanenteG'] == $x ) {
        $_SESSION['ganhou'] = "x";
    }else{

    }
    if ($_SESSION['permanenteB'] == $x && $_SESSION['permanenteE'] == $x && $_SESSION['permanenteH'] == $x ) {
        $_SESSION['ganhou'] = "x";
    }else{

    }
    if ($_SESSION['permanenteC'] == $x && $_SESSION['permanenteF'] == $x && $_SESSION['permanenteI'] == $x ) {
        $_SESSION['ganhou'] = "x";
    }else{

    }
    if ($_SESSION['permanenteA'] == $x && $_SESSION['permanenteE'] == $x && $_SESSION['permanenteI'] == $x ) {
        $_SESSION['ganhou'] = "x";
    }else{

    }
    if ($_SESSION['permanenteC'] == $x && $_SESSION['permanenteE'] == $x && $_SESSION['permanenteG'] == $x ) {
        $_SESSION['ganhou'] = "x";
    }else{

    }
    if ($_SESSION['permanenteA'] == $o && $_SESSION['permanenteB'] == $o && $_SESSION['permanenteC'] == $o ) {
        $_SESSION['ganhou'] = "o";
    }else{

    }
    if ($_SESSION['permanenteD'] == $o && $_SESSION['permanenteE'] == $o && $_SESSION['permanenteF'] == $o ) {
        $_SESSION['ganhou'] = "o";
    }else{

    }
    if ($_SESSION['permanenteG'] == $o && $_SESSION['permanenteH'] == $o && $_SESSION['permanenteI'] == $o ) {
        $_SESSION['ganhou'] = "o";
    }else{

    }
    if ($_SESSION['permanenteA'] == $o && $_SESSION['permanenteD'] == $o && $_SESSION['permanenteG'] == $o ) {
        $_SESSION['ganhou'] = "o";
    }else{

    }
    if ($_SESSION['permanenteB'] == $o && $_SESSION['permanenteE'] == $o && $_SESSION['permanenteH'] == $o ) {
        $_SESSION['ganhou'] = "o";
    }else{

    }
    if ($_SESSION['permanenteC'] == $o && $_SESSION['permanenteF'] == $o && $_SESSION['permanenteI'] == $o ) {
        $_SESSION['ganhou'] = "o";
    }else{

    }
    if ($_SESSION['permanenteA'] == $o && $_SESSION['permanenteE'] == $o && $_SESSION['permanenteI'] == $o ) {
        $_SESSION['ganhou'] = "o";
    }else{

    }
    if ($_SESSION['permanenteC'] == $o && $_SESSION['permanenteE'] == $o && $_SESSION['permanenteG'] == $o ) {
        $_SESSION['ganhou'] = "o";        
    }else{

    }

    //verificar se deu velha

    if (isset($_SESSION['permanenteA']) && isset($_SESSION['permanenteB']) && isset($_SESSION['permanenteC']) && isset($_SESSION['permanenteD']) && isset($_SESSION['permanenteE']) && isset($_SESSION['permanenteF']) && isset($_SESSION['permanenteG']) && isset($_SESSION['permanenteH']) && isset($_SESSION['permanenteI'])) {
        
        if (isset($_SESSION['ganhou'])) {
            
        }
        else{
        $_SESSION['ganhou'] = "velha";
        }
    }

    header('Location:index.php');
    }






?>
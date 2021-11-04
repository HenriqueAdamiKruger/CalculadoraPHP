<?php
session_start();

if (isset($_POST["n1"])){
    $_SESSION['valor'] = $_SESSION['valor'] .= 1; 
    header('Location: index.php');
} 
if (isset($_POST["n2"])){
    $_SESSION['valor'] = $_SESSION['valor'] .= 2; 
    header('Location: index.php');
}
if (isset($_POST["n3"])){
    $_SESSION['valor'] = $_SESSION['valor'] .= 3; 
    header('Location: index.php');
}
if (isset($_POST["n4"])){
    $_SESSION['valor'] = $_SESSION['valor'] .= 4; 
    header('Location: index.php');
}
if (isset($_POST["n5"])){
    $_SESSION['valor'] = $_SESSION['valor'] .= 5; 
    header('Location: index.php');
}
if (isset($_POST["n6"])){
    $_SESSION['valor'] = $_SESSION['valor'] .= 6; 
    header('Location: index.php');
}
if (isset($_POST["n7"])){
    $_SESSION['valor'] = $_SESSION['valor'] .= 7; 
    header('Location: index.php');
}
if (isset($_POST["n8"])){
    $_SESSION['valor'] = $_SESSION['valor'] .= 8; 
    header('Location: index.php');
}
if (isset($_POST["n9"])){
    $_SESSION['valor'] = $_SESSION['valor'] .= 9; 
    header('Location: index.php');
}
if (isset($_POST["n0"])){
    $_SESSION['valor'] = $_SESSION['valor'] .= 0; 
    header('Location: index.php');
}
if (isset($_POST["c"])){ 
    header('Location: destruirsessao.php');
}
if (isset($_POST["soma"])){
    $_SESSION['soma'] = True;
    $_SESSION['valortotal'] = $_SESSION['valor'];
    unset($_SESSION['valor']);
    header('Location: index.php');
    limpasessao('soma');
}     
if (isset($_POST["sub"])){
    $_SESSION['sub'] = True;
    $_SESSION['valortotal'] = $_SESSION['valor'];
    unset($_SESSION['valor']);
    header('Location: index.php');
    limpasessao('sub');
}  
if (isset($_POST["mult"])){
    $_SESSION['mult'] = True;
    $_SESSION['valortotal'] = $_SESSION['valor'];
    unset($_SESSION['valor']);
    header('Location: index.php');
    limpasessao('mult');
} 
if (isset($_POST["div"])){
    $_SESSION['div'] = True;
    $_SESSION['valortotal'] = $_SESSION['valor'];
    unset($_SESSION['valor']);
    header('Location: index.php');
    limpasessao('div');
}

if (isset($_POST["result"])){
    if ($_SESSION['soma']) {
        $_SESSION['valor'] = $_SESSION['valor'] + $_SESSION['valortotal'];
    }
    if ($_SESSION['sub']) {
        $_SESSION['valor'] = $_SESSION['valortotal'] - $_SESSION['valor'];
    }
    if ($_SESSION['mult']) {
        $_SESSION['valor'] = $_SESSION['valor'] * $_SESSION['valortotal'];
    }
    if ($_SESSION['div']) {
        $_SESSION['valor'] = $_SESSION['valortotal'] / $_SESSION['valor'];
    }
    header('Location: index.php');
} 

function limpasessao($op) {
    if ($op <> 'soma') {
        unset($_SESSION['soma']);
    }
    if ($op <> 'sub') {
        unset($_SESSION['sub']);    
    }
    if ($op <> 'mult') {
        unset($_SESSION['mult']);     
    }
    if ($op <> 'div') {
        unset($_SESSION['div']);    
    }
}

?>
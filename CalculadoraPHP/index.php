<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <section>
        <form action="calcular.php" method="post">
            <table>
                <tr>
                    <td colspan="4">
                        <?php
                        
                        if (!isset($_SESSION['valor'])) {
                            $valor = 0;
                        } else {
                            $valor = $_SESSION['valor'];
                        } 
                        ?>
                        <input type="text" id="label" name="label" value="<?php echo($valor) ?>"/>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="1" name="n1"></td>
                    <td><input type="submit" value="2" name="n2"></td>
                    <td><input type="submit" value="3" name="n3"></td>
                    <td><input type="submit" value="+" name="soma"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="4" name="n4"></td>
                    <td><input type="submit" value="5" name="n5"></td>
                    <td><input type="submit" value="6" name="n6"></td>
                    <td><input type="submit" value="-" name="sub"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="7" name="n7"></td>
                    <td><input type="submit" value="8" name="n8"></td>
                    <td><input type="submit" value="9" name="n9"></td>
                    <td><input type="submit" value="x" name="mult"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="c" name="c"></td>
                    <td><input type="submit" value="0" name="n0"></td>
                    <td><input type="submit" value="=" name="result"></td>
                    <td><input type="submit" value="/" name="div"></td>
                </tr>
            </table>    
        </form>       
    </section>
</body>
</html>
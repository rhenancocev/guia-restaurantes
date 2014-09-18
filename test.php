
    <?php
    include "operacoes.php";

    $x=10;
    $y=5;
    $soma= soma($x, $y);
    $subtracao = subtracao($x, $y);
    $multiplicacao= multiplicacao($x, $y);
    $divisao= divisao($x, $y);

    echo "soma"+ $soma;
    echo "</br>";
    echo "subtração" +$subtracao;
    echo "</br>";
    echo "multiplicação"+ $multiplicacao;
    echo "</br>";
    echo "divisão"+ $divisao;
    echo "</br>";

    ?>
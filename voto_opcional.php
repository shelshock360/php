
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $ano = isset($_POST["ano"]) ? $_POST["ano"] : 1900;
        $idade = date("Y") - $ano;

        if ($idade < 16) {

            $tipo_voto = "não vota";
        } elseif ($idade >= 16 && $idade < 18 || ($idade > 65)) {

            $tipo_voto = "opcional";
        } else {


            $tipo_voto = "obrigatorio";
        }


        echo " voce tem $idade e portando o voto é $tipo_voto";
        ?>
    </body>
</html>

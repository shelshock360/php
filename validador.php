
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $ano= isset($_POST["ano"])?$_POST["ano"]:1900;
        $idade=date("Y")-$ano;
        
        echo " vc naceu em $ano e tera $idade anos";
        
        if($idade>=18){
            
            $voto="pode votar";
            $dirigir="ja pode dirigir";
            
        }else{
            
             $voto="não pode votar";
            $dirigir="não pode dirigir";
            
        }
        
        echo "</br>com essa idade voce pode $voto e pode $dirigir";
            
        
        
        ?>
    </body>
</html>

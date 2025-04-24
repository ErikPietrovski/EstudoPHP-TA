<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt=5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 alert alert-info">
                <h1 class="dark-text mt-3">
                    Trabalhando com Array!
                </h1>
                <h2 class="dark-text">
                    Declarando um Array em php
                </h2>
                <h3 class="dark-text">
                    Primeira maneira
                </h3>
                <h5 class="dark-text">
                    $dados = array('Banana';'Maçã';'Goiaba');
                </h5>
                <h2 class="dark-text">
                    Segunda maneira (Simplificada)
                </h2>
                <h5 class="dark-text">
                    $dados = ['banana','Maçã','Goiaba'];
                </h5>
                <p>
                    var_dump();
                </p>
                <h2 class="dark-text">
                    Declarando um Array associativo
                </h2>
                <h5 class="dark-text">
                    $dados = [array('Professor'=> 'Adriano', 'Disciplina'=> 'Programação Web II', '')]
                </h5>
                <h5 class="dark-text">
                    <?php 
                        echo $dados[2];
                    ?>
                </h5>
                <h2 class="dark-text">
                    Verificando o conteudo do Array
                </h2>
                <h5 class="dark-text">
                    var_dump($dados);
                </h5>
                <h5 class="dark-text">
                    <?php 
                        $dados = ['Banana','Maçã','Goiaba'];
                        var_dump($dados);
                    ?>
                </h5>
                <h2 class="dark-text">
                    Adicionando elemento ao Array
                </h2>
                <h5 class="dark-text">
                    $dados[] = 'Melão';
                </h5>
                <h5 class="dark-text">
                <?php 
                    $dados[] = 'Melão';
                    var_dump($dados);
                ?>
                    </h5>
                <h2 class="dark-text">
                    Imprimindo um índice específico
                </h2>
                <h5 class="dark-text">
                    echo $dados[2];
                </h5>
                <h5 class="dark-text">
                    <?php 
                        echo $dados[2];
                    ?>
                </h5>
                <h2 class="dark-text">
                    Imprimindo todos os índices do Array
                </h2>
                <h5 class="dark-text">
                    foreach($dados as $dado){
                            echo "<li>$dado</li>"
                        }
                </h5>
                <h5 class="dark-text">
                    <?php 
                    
                        foreach($dados as $dado){
                            echo "<li>$dado</li>";
                        }
                    ?>
                </h5>
            </div>
        </div>
    </div>
</body>
</htm
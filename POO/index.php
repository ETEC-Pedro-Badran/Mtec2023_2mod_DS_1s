<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body >
</body>





















<!--    <h1>Programação Orientada a Objetos</h1>
    <h2>Classe</h2>
    <p>Modelo de objetos.  
       Permite criar uma estrutura que organiza atributos, e 
       métodos.
    <ul>
        <li>Atributos: São caracteríticas do objeto. São variáveis do objeto.</li>
        <li>Métodos: São ações ou eventos. São pequenos algorítimos</li>
    </ul>   
    
    <code>
        <pre>
        class Pessoa {
            public $nome;
            public $telefone;
            public $foto;

            function imprimir(){
                return "$this->nome - $this->telefone";
            }
        }
            </pre>
    </code>    
    <?php
        require "pessoa_class.php";
        $pessoa = new Pessoa();
        $pessoa->nome = "José";
        $pessoa->telefone = "1624352452345";
        $pessoa->foto = "https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80";
    ?>    
       <P>Nome da Pessoa:  <?=$pessoa->nome?><br>
       <P>Telefone da Pessoa:  <?=$pessoa->telefone?><br>
       <img src="<?=$pessoa->foto?>" style="width:10%;">
    
</body>
</html>
--!>
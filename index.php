<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações dos Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: violet;
            color: black;
        }

        .cliente {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .informacoes {
            color: black;
            margin-bottom: 10px;
            text-align: center;
        }

        p {
            font-size: 16px;
            margin: 5px 0;
        }

        strong {
            color: #555;
        }
    </style>
</head>
<body>

<div class="informacoes">
    <h2>Informações dos Clientes</h2>
</div>

<?php

//anotações:
/*

- Com public, você tem acesso direto aos atributos, tanto dentro quanto fora da classe. Mas isso pode ser um problema, pois permite que qualquer parte do código mude diretamente os valores dos atributos sem controle.
- Com private, você controla melhor o acesso às propriedades, forçando o uso de métodos (como getters e setters) para definir ou obter o valor. Isso torna o código mais seguro e encapsulado, pois você pode adicionar regras dentro dos métodos que regulam como os dados são acessados ou modificados.

- A instância é o objeto criado a partir de uma classe. Cada instância pode ter valores diferentes para as propriedades da classe.
*/


// minha classe Cliente possui 4 atributos 

class Cliente {
    public $nome;
    public $email;
    public $tipo;
    public $telefone;
    
// dois metodos, o constructor recebe os 4 parâmetros e o exibirInform exive usando echo
    public function __construct($nome, $email, $tipo, $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->tipo = $tipo;
        $this->telefone = $telefone;

     
    }


// esses pontos tá fzd a concatenação (em JavaScript usa-se o +)
    public function exibirInformacoes() {
        echo "
        <div class='cliente'>
            <p><strong>Nome:</strong> {$this->nome}</p>
            <p><strong>Email:</strong> {$this->email}</p>
            <p><strong>Tipo:</strong> {$this->tipo}</p>
            <p><strong>Telefone:</strong> {$this->telefone}</p>
        </div>";
    }
       
}

// a instância é um objeto, ou seja, o PHP está criando uma nova instância da classe e chamando o método. 
// o método ele vai pegar os valores ex: Edilson... e armazenar em nome.
//assim cliente1 vai ser uma instância da classe CLIENTE 

$cliente1 = new Cliente("Edilson", "edilson123@email.com", "Pessoa Física", "987584796");
$cliente2 = new Cliente("Maria Eduarda", "duda@email.com", "Pessoa Física", "984594897");
$cliente3 = new Cliente("Yonara", "yonara90@email.com", "Pessoa Jurídica", "654789563");
$cliente4 = new Cliente("Isaac", "isaac@email.com", "Pessoa Física", "654789523");
$cliente5 = new Cliente("Beatriz", "bia345@email.com", "Pessoa Física", "324568795");

$cliente1->exibirInformacoes();
$cliente2->exibirInformacoes();
$cliente3->exibirInformacoes();
$cliente4->exibirInformacoes();
$cliente5->exibirInformacoes();
?>

</div>
</body>
</html>

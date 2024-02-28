<?php

//1)
// Crie uma classe chamada 'Livro' com propriedades privadas 'titulo' e 'autor'.
// Implemente um método construtor para inicializar essas propriedades.
// Em seguida, crie um objeto da classe 'Livro' e exiba suas propriedades.
class Livro{
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor){
        $this->titulo = $titulo;
        $this->autor  = $autor;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

//2)
// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.

public function setTitulo($novoTitulo){
    $this->titulo = $novoTitulo;
}

public function setAutor($novoAutor){
    $this->autor = $novoAutor; 
}
//----------------------------------------

};
   $livro1 = new Livro("Chapeuzinho Vermelho", "Charles Perrault");
   $livro1->setAutor("seila");
   $livro1->setTitulo("2123464");


   echo "Nome do livro:" . $livro1->getTitulo() . "</br>";
   echo "Autor do livro:" . $livro1->getAutor() . "</br>";
//--------------------------------------------------------------------------------------


//3) - // 4)
// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.
class Animal {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }
}

class Cachorro extends Animal {
    public function getIdade() {
        return $this->idade * 7;
    }
}


$cachorro = new Cachorro("Rex", 3);

echo "Nome do cachorro: " . $cachorro->getNome() . "\n";
echo "Idade do cachorro em anos humanos: " . $cachorro->getIdade() . "\n";


//5)
// Crie uma classe chamada 'Calculadora' com um método estático chamado 'soma' que recebe dois números e retorna a soma.
// Não é necessário instanciar a classe para utilizar o método 'soma'.
// Demonstre a utilização deste método.

class Calculadora {
    public static function soma($num1, $num2) {
        return $num1 + $num2;
    }
}

$resultado = Calculadora::soma(5, 3);
echo "Resultado da soma: " . $resultado; 


//------------parte 2-------------------

//1)
// Defina uma classe base 'Veiculo' com propriedades como 'marca' e 'modelo'.
// Crie duas classes derivadas, 'Carro' e 'Moto', que herdam de 'Veiculo'.
// Implemente métodos específicos para cada classe e um método comum para exibir informações gerais.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

class Veiculo {
    protected $marca;
    protected $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibirInformacoes() {
        return "Marca: " . $this->marca . ", Modelo: " . $this->modelo;
    }
}

class Carro extends Veiculo {
    private $tipo;

    public function __construct($marca, $modelo, $tipo) {
        parent::__construct($marca, $modelo);
        $this->tipo = $tipo;
    }

    public function exibirInformacoes() {
        return parent::exibirInformacoes() . ", Tipo: " . $this->tipo;
    }
}

class Moto extends Veiculo {
    private $cilindradas;

    public function __construct($marca, $modelo, $cilindradas) {
        parent::__construct($marca, $modelo);
        $this->cilindradas = $cilindradas;
    }

    public function exibirInformacoes() {
        return parent::exibirInformacoes() . ", Cilindradas: " . $this->cilindradas;
    }
}


$carro = new Carro("Toyota", "Corolla", "Sedan");
$moto = new Moto("Honda", "CBR600RR", 600);


echo "Informações do Carro: " . $carro->exibirInformacoes() . "\n";
echo "Informações da Moto: " . $moto->exibirInformacoes() . "\n";

//2)
// Crie uma trait chamada 'Mensagens' que define um método 'enviarMensagem'.
// Crie duas classes, 'EmailSender' e 'SMSSender', que utilizam a trait 'Mensagens'.
// Demonstre a utilização da trait em ambas as classes.

interface Mensagens {
    public function enviarMensagem($destinatario, $mensagem);
}

class EmailSender implements Mensagens {
    public function enviarMensagem($destinatario, $mensagem) {
        echo "Enviando e-mail para $destinatario: $mensagem\n";
    }
}

class SMSSender implements Mensagens {
    public function enviarMensagem($destinatario, $mensagem) {
        echo "Enviando SMS para $destinatario: $mensagem\n";
    }
}

$emailSender = new EmailSender();
$smsSender = new SMSSender();

$emailSender->enviarMensagem("exemplo@email.com", "Olá! Este é um e-mail de teste.");
$smsSender->enviarMensagem("123456789", "Olá! Este é uma mensagem de texto de teste.");

//3)
// Crie duas classes, 'Cliente' e 'Pedido', no namespace 'Loja'.
// Em seguida, crie uma classe 'Pagamento' em um namespace diferente, por exemplo, 'Financeiro'.
// Demonstre a utilização das classes em seus respectivos namespaces.

<?php

namespace Loja {

    class Cliente {
        public $nome;

        public function __construct($nome) {
            $this->nome = $nome;
        }
    }


    class Pedido {
        public $numero;

        public function __construct($numero) {
            $this->numero = $numero;
        }
    }
}

// Definição do namespace Financeiro
namespace Financeiro {

    use Loja\Cliente;
    use Loja\Pedido;


    class Pagamento {
        public $valor;

        public function __construct($valor) {
            $this->valor = $valor;
        }

        public function processarPagamento(Cliente $cliente, Pedido $pedido) {
            echo "Processando pagamento de {$this->valor} para o cliente {$cliente->nome} referente ao pedido {$pedido->numero}\n";
        }
    }
}

use Loja\Cliente;
use Loja\Pedido;
use Financeiro\Pagamento;


$cliente = new Cliente("João");
$pedido = new Pedido("123");


$pagamento = new Pagamento(100);


$pagamento->processarPagamento($cliente, $pedido);

//4)
// Crie uma classe base 'Animal' com um método 'emitirSom'.
// Crie duas classes derivadas, 'Cachorro' e 'Gato', que herdam de 'Animal'.
// Sobrescreva o método 'emitirSom' em ambas as classes derivadas para representar o som característico.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.


l
class Animal {

    public function emitirSom() {
        echo "Som genérico de animal\n";
    }
}


class Cachorro extends Animal {

    public function emitirSom() {
        echo "Au au!\n";
    }
}


class Gato extends Animal {

    public function emitirSom() {
        echo "Miau!\n";
    }
}

$cachorro = new Cachorro();
$gato = new Gato();

echo "Cachorro faz: ";
$cachorro->emitirSom();

echo "Gato faz: ";
$gato->emitirSom();

//5)
// Crie duas traits, 'LogErro' e 'LogInfo', ambas com um método 'registrarLog'.
// Em seguida, crie uma classe 'Registro' que utiliza ambas as traits.
// Demonstre o uso da classe e resolva possíveis conflitos de métodos.


trait LogErro {
    public function registrarLog($mensagem) {
        echo "Log de erro: $mensagem\n";
    }
}

trait LogInfo {
    public function registrarLog($mensagem) {
        echo "Log de informação: $mensagem\n";
    }
}

class Registro {

    use LogErro, LogInfo {
        LogErro::registrarLog insteadof LogInfo; 
        LogInfo::registrarLog as registrarLogInfo; 
    }
}


$registro = new Registro();


$registro->registrarLog("Erro crítico ocorreu!");


$registro->registrarLogInfo("Informação importante registrada.");


?>

<?php 


$nome = "Hitallo";

echo "meu nome ehh". $nome;



$idade = 26;

if($idade === 26){
    echo "verdadeiro";
}else{
    echo "falso";
}



/*
for( $i=0; $i <= 10; $i++){
    echo $i;
    echo '<hr>';
} 
*/
$i==0;
while($i<10){
    echo $i;
    echo '<br>';
    $i++;
}



printNumber(30);
function printNumber($n){
    echo $n;

}



class Pessoa{
    public $name;
    public $idade;

    public function __construct($name,$idade){
        $this ->name = $name;
        $this ->idade = $idade;

    }

    public function printNamaIdade(){
        echo $this ->name;
        echo '<br>';
        echo $this ->idade;
    }



}

$pessoa = new Pessoa("Hitallo", '26');

$pessoa -> printNamaIdade();
$pessoa2 = new Pessoa("Hitallo", '29');

$pessoa2 -> printNamaIdade();






 $arr = ["Hitallo", "Higo", "Jeoval"];
 echo $arr[0];
?>
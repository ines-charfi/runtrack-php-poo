<?php
class Operation{
    public int $number1;
    public int $number2;
    public function __construct( $nbre1 = 3,int $nbre2 = 5){
        $this->number1 = $nbre1;
        $this->number2 = $nbre2;
    }
    public function __operation($number1,$number2){
        return "la somme de $this->number1 + $this->number2 est : ". ($this->number1 + $this->number2);

    }

}
// Example usage
$operation = new Operation(8,9);
echo $operation->__operation(8,9);
?>
<?php
class Calculator {
    /*
     * Class for converting miles to kilometers and vice versa
     */
    var $number1 = 0, $number2 = 0, $operation = '';
    /*
     * The constructor takes the number and unit and assigns
     * them to the corresponding properties.
     * @param int $number The number to be converted
     * @param string The conversion unit
     */
    public function __construct($number1, $number2, $operation) {
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->operation = $operation;
    }
    /*
     * Performs the operation
     * @return string The result of the operation
     */
    public function calculation() {
        if ($this->unit == '+') {
            $result = $this->number1 + $this->number2;
        } elseif ($this->unit == '-') {
            $result = $this->number1 - $this->number2;
        }
        elseif ($this->unit == '*') {
            $result = $this->number1 * $this->number2;
        }
        elseif ($this->unit == '/') {
            $result = $this->number1 / $this->number2;
        } else {
            $result = 'error';
        }
        return $result;
    }
}

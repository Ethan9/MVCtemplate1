<?php
class Converter {
    /*
     * Class for converting miles to kilometers and vice versa
     */
    var $number = 0, $unit = '';
    /*
     * The constructor takes the number and unit and assigns
     * them to the corresponding properties.
     * @param int $number The number to be converted
     * @param string The conversion unit
     */
    public function __construct($number, $unit) {
        $this->number = $number;
        $this->unit = $unit;
    }
    /*
     * Converts the number and return the result
     * @return string The result of the conversion
     */
    public function convert() {
        if ($this->unit == 'miles to km') {
            $result = $this->number * 1.609;
        } elseif ($this->unit == 'km to miles') {
            $result = $this->number * 0.621;
        }
        elseif ($this->unit == 'km to parsecs') {
            $result = $this->number * 3.24078e-14;
        }
        elseif ($this->unit == 'miles to parsecs') {
            $result = $this->number * 5.21553e-14;
        } else {
            $result = 'error';
        }
        return $result;
    }
}

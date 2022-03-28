<?php

function currencyConverter($amount , $currency1, $currency2){
    
        
    
    if($currency1=='usd' && $currency2=='cad'){
        return "$amount USD = " . 1.25 * $amount . " CAD";
    }
    else if($currency1=='usd' && $currency2=='pound'){
        return "$amount USD = " . 0.76 * $amount . " POUND";
    }
    else if($currency1=='usd' && $currency2=='euro'){
        return "$amount USD = " . 0.91 * $amount . " EURO";
    }
    else if($currency1=='usd' && $currency2=='won'){
        return "$amount USD = " . 1226.84 * $amount . " WON";
    }
    
    
    if($currency1=='cad' && $currency2=='usd'){
        return "$amount CAD = " . 0.80 * $amount . " USD";
    }
    else if($currency1=='cad' && $currency2=='pound'){
        return "$amount CAD = " . 0.61 * $amount . " POUND";
    }
    else if($currency1=='cad' && $currency2=='euro'){
        return "$amount CAD = " . 0.73 * $amount . " EURO";
    }
    else if($currency1=='cad' && $currency2=='won'){
        return "$amount CAD = " . 982.42 * $amount . " WON";
    }
      
    
    if($currency1=='pound' && $currency2=='usd'){
        return "$amount POUND = " . 1.32 * $amount . " USD";
    }
    else if($currency1=='pound' && $currency2=='cad'){
        return "$amount POUND = " . 1.64 * $amount . " CAD";
    }
    else if($currency1=='pound' && $currency2=='euro'){
        return "$amount POUND = " . 1.20 * $amount . " EURO";
    }
    else if($currency1=='pound' && $currency2=='won'){
        return "$amount POUND = " . 1614.65 * $amount . " WON";
    }
      
    
    if($currency1=='euro' && $currency2=='usd'){
        return "$amount EURO = " . 1.10 * $amount . " USD";
    }
    else if($currency1=='euro' && $currency2=='cad'){
        return "$amount EURO = " . 1.37 * $amount . " CAD";
    }
    else if($currency1=='euro' && $currency2=='pound'){
        return "$amount EURO = " . 0.83 * $amount . " POUND";
    }
    else if($currency1=='euro' && $currency2=='won'){
        return "$amount EURO = " . 1344.43 * $amount . " WON";
    }


    if($currency1=='won' && $currency2=='usd'){
        return "$amount WON = " . 0.00081 * $amount . " USD";
    }
    else if($currency1=='won' && $currency2=='cad'){
        return "$amount WON = " . 0.0010 * $amount . " CAD";
    }
    else if($currency1=='won' && $currency2=='pound'){
        return "$amount WON = " . 0.00062 * $amount . " POUND";
    }
    else if($currency1=='won' && $currency2=='euro'){
        return "$amount WON = " . 0.00074 * $amount . " EURO";
    }
    
    
    

    }

?>
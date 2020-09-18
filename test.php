<?php

/**
 * Class pedro
 */
class pedro {
    /**
     * @var string
     */
    public $appellido = 'pers';

    /**
     * @param array $arguments
     */
    public function __construct(array $arguments=[])
    {
        if (!$arguments<> null) {
            $this->appellido=$arguments[1];
        }
    }

    public function pedrodice(){
        return 'pedro dice';
    }
}

/**
 * Class objeto
 */
class objeto {
    /**
     * @var string
     */
    public $name='oscar';

    /**
     * @return string
     */
    public function hola() {
        return 'hola';
    }

    /**
     * @return pedro
     */
    public function getPedro(){
        return new pedro();
    }
    
}
$arguments=[1=>'oscar',2=>'pepe'];
$obj= new objeto();
$pedro=new pedro($arguments);
$message=$obj->getPedro()->pedrodice();
echo $message;

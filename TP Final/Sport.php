<?php

abstract class Sport{
    protected $intitule;
    protected $individuel;
    private static $nbSport = 0;

    public function __construct($intitule, $individuel){
        $this->intitule = $intitule;
        $this->individuel = $individuel;
        self::$nbSport++;
    }

    public static function getNbSport(){
        return self::$nbSport;
    }

}

?>
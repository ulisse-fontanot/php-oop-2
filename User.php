<?php

class User {
    public $ID;
    public $nome;
    public $cognome;
    public $eta;
    public $sesso;
    public $descrizione;

    public function __construct($_ID,$_nome,$_cognome,$_eta,$_sesso,$_descrizione){
        $this->ID = $_ID;
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;
        $this->sesso = $_sesso;
        $this->descrizione = $_descrizione;
    }
}

class Employee extends User{
    public $seguaci;

    public function __construct($_ID,$_nome,$_cognome,$_eta,$_sesso,$_descrizione,$_seguaci = 100){
        parent::__construct($_ID,$_nome,$_cognome,$_eta,$_sesso,$_descrizione);
        $this->seguaci = $_seguaci;
    }
    public function setSeguaci() {
        $this->seguaci = $this->seguaci * 3;
    }
    public function getSeguaci() {
        return $this->seguaci;
    }
}

// trait GetInteresse {
//     public $interesse;
//     public function setInteresse($interesse){
//         $this->interesse = $interesse;
//     }
//     public function getInteresse(){
//         return $this->interesse;
//     }

//     $user1->setInteresse('politica');
//     $interesse1 = $user1->getInteresse();
// }

$user1 = new Employee(
    1234,
    'Jerry',
    'Polemica',
    '46',
    'Maschio',
    'Sollevatore di polemiche'
);
$user2 = new Employee(
    4321,
    'Padre',
    'Maronno',
    '55',
    'Maschio',
    'Aiuto Dio'
);

var_dump($user1);
var_dump($user2);
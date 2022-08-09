<?php
class Compteur{
    const INCREMENT = 1;
    private $lien;

    public function __construct(string $chemin)
    {
        $this->lien=$chemin;
    }

    public function incrementer(): void
    {
        
        $compteur=1;
        if(file_exists($this->lien)){
            $compteur=(int)file_get_contents($this->lien);
            $compteur += self::INCREMENT;
     } file_put_contents($this->lien, $compteur);
    }
    public function  recuperer():int
    {
        if(!file_exists($this->lien)){
            return 0 ;
        }
        return file_get_contents($this->lien);
    }
}
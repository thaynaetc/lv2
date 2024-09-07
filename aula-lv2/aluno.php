<?php
   
   Class Aluno{
          public $nome;
          public $nota1;
          public $nota2;
          public $nota3;
          public $media;

          public function cacularMedia(){

                    $this->media = (($this->nota1*3) + ($this->nota2*3) + ($this->nota3 *4))/(3+3+4);
          }

          public function info(){
                    echo "Nome: ".$this->nome.
                    "Media: ".$this->media;
          }


   }
?>
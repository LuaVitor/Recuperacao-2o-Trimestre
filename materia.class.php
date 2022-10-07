<?php
    class Materia
    {
        public $nome;
        public $faltas;
        public $usuario;
        public $nota_1;
        public $nota_2;
        public $nota_3;
        private $arquivo = "materias.json";
        private $listaDeMaterias;
        private $novaMateria;
        public function __construct($usuario, $nome, $faltas, $nota_1, $nota_2, $nota_3)
        {
            $this->usuario = $usuario;
            $this->nome = $nome;
            $this->faltas = $faltas;
            $this->nota_1 = $nota_1;
            $this->nota_2 = $nota_2;
            $this->nota_3 = $nota_3;
            $this->listaDeMaterias = json_decode(file_get_contents($this->arquivo));
            $this->novaMateria = ["Aluno" => $this->usuario, "Nome" => $this->nome, "Faltas" => $this->faltas, "Nota_Trim_1" => $this->nota_1, "Nota_Trim_2" => $this->nota_2,"Nota_Trim_3" => $this->nota_3];
            $this->AdicionaMateria();
        }
        private function AdicionaMateria()
        {
            fopen($this->arquivo, "w");
            if(!isset($this->listaDeMaterias))
            {
                file_put_contents($this->arquivo, json_encode([$this->novaMateria], JSON_PRETTY_PRINT));
            }
            else
            {
                array_push($this->listaDeMaterias, $this->novaMateria);
                file_put_contents($this->arquivo, json_encode($this->listaDeMaterias, JSON_PRETTY_PRINT));
            }
            $this->mensagem = "Cadastro realizado com sucesso!";
        }
    }
?>
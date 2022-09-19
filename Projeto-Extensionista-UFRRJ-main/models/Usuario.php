<?php

require_once __DIR__.'/../bd/connect.php';

class Usuario {
    
    private $bd;
    private $login;
    private $senha;
    private $nome;
    private $cpf;
    private $matricula;
    private $tipo;

    public function getBd(){
        return $this->bd;
    }

    public function setBd($bd){
        $this->bd = $bd;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = md5($senha);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function __construct() {
        $this->bd = conectaBd();
    }

    public function logar() {
        $query = "Select * from usuario WHERE login=:login AND senha=:senha";
        $stmt = $this->bd->prepare($query);
        $stmt->bindValue(':login', $this->getLogin());
        $stmt->bindValue(':senha', $this->getSenha());
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function cadastrar(){
		$query = "Insert into usuario (login, senha, nome, cpf, matricula, tipo) Values (:login, :senha, :nome, :cpf, :matricula, :tipo)";
		$stmt = $this->bd->prepare($query);
		$stmt->bindValue(':login', $this->getLogin());
		$stmt->bindValue(':senha', $this->getSenha());
		$stmt->bindValue(':nome', $this->getNome());
		$stmt->bindValue(':cpf', $this->getCpf());
		$stmt->bindValue(':matricula', $this->getMatricula());
		$stmt->bindValue(':tipo', $this->getTipo());
		$stmt->execute();
	}

    public function buscarAlunosCriarProjeto()
    {
        $query = "Select usuario.* from usuario WHERE tipo='aluno' AND usuario.cpf NOT IN (Select aluno FROM projetos)";
        $stmt = $this->bd->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

	public function buscarNomeProfessorPeloProjeto()
	{
		$query = "Select usuario.nome, usuario.matricula from usuario INNER JOIN projetos ON usuario.cpf = projetos.professor WHERE cpf =:cpf";
		$stmt = $this->bd->prepare($query);
		$stmt->bindValue(':cpf', $this->getCpf());
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
	}
}

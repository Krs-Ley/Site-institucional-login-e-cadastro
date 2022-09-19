<?php

require_once __DIR__.'/../bd/connect.php';

class Relatorio {
    
    private $bd;
	private $id_relatorio;
    private $descricao;
    private $carga_horaria;
    private $projeto;
    private $aluno;
    private $situacao;
	private $carga_horaria_aprovada;
	private $motivo_carga_horaria_aprovada;

	public function getBd(){
		return $this->bd;
	}

	public function setBd($bd){
		$this->bd = $bd;
	}

	public function getId_relatorio(){
		return $this->id_relatorio;
	}

	public function setId_relatorio($id_relatorio){
		$this->id_relatorio = $id_relatorio;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getCarga_horaria(){
		return $this->carga_horaria;
	}

	public function setCarga_horaria($carga_horaria){
		$this->carga_horaria = $carga_horaria;
	}

	public function getProjeto(){
		return $this->projeto;
	}

	public function setProjeto($projeto){
		$this->projeto = $projeto;
	}

	public function getAluno(){
		return $this->aluno;
	}

	public function setAluno($aluno){
		$this->aluno = $aluno;
	}

	public function getSituacao(){
		return $this->situacao;
	}

	public function setSituacao($situacao){
		$this->situacao = $situacao;
	}

	public function getCarga_horaria_aprovada(){
		return $this->carga_horaria_aprovada;
	}

	public function setCarga_horaria_aprovada($carga_horaria_aprovada){
		$this->carga_horaria_aprovada = $carga_horaria_aprovada;
	}

	public function getMotivo_carga_horaria_aprovada(){
		return $this->motivo_carga_horaria_aprovada;
	}

	public function setMotivo_carga_horaria_aprovada($motivo_carga_horaria_aprovada){
		$this->motivo_carga_horaria_aprovada = $motivo_carga_horaria_aprovada;
	}

    public function __construct() {
        $this->bd = conectaBd();
    }

	public function cadastrar(){
		$query = "Insert into relatorios (descricao, carga_horaria, projeto, aluno, situacao) Values (:descricao, :carga_horaria, :projeto, :aluno, :situacao)";
		$stmt = $this->bd->prepare($query);
		$stmt->bindValue(':descricao', $this->getDescricao());
		$stmt->bindValue(':carga_horaria', $this->getCarga_horaria());
		$stmt->bindValue(':projeto', $this->getProjeto());
		$stmt->bindValue(':aluno', $this->getAluno());
		$stmt->bindValue(':situacao', $this->getSituacao());
		$stmt->execute();
	}

	public function avaliarRelatorio() {
		$query = "UPDATE relatorios SET carga_horaria_aprovada = :carga_horaria_aprovada, motivo_carga_horaria_aprovada = :motivo_carga_horaria_aprovada, situacao = :situacao WHERE id_relatorio = :relatorio";
		$stmt = $this->bd->prepare($query);
		$stmt->bindValue(':carga_horaria_aprovada', $this->getCarga_horaria_aprovada());
		$stmt->bindValue(':motivo_carga_horaria_aprovada', $this->getMotivo_carga_horaria_aprovada());
		$stmt->bindValue(':relatorio', $this->getId_relatorio());
		$stmt->bindValue(':situacao', $this->getSituacao());
		$stmt->execute();
	}
}

<?php

require_once __DIR__.'/../bd/connect.php';

class Projeto {
    
    private $bd;
	private $id_projeto;
    private $nome;
    private $aluno;
    private $descricao;
    private $professor;
    private $situacao;
	private $motivo_situacao;

    public function getBd(){
		return $this->bd;
	}

	public function setBd($bd){
		$this->bd = $bd;
	}

	public function getIdProjeto(){
		return $this->id_projeto;
	}

	public function setIdProjeto($id_projeto){
		$this->id_projeto = $id_projeto;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getAluno(){
		return $this->aluno;
	}

	public function setAluno($aluno){
		$this->aluno = $aluno;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getProfessor(){
		return $this->professor;
	}

	public function setProfessor($professor){
		$this->professor = $professor;
	}

	public function getSituacao(){
		return $this->situacao;
	}

	public function setSituacao($situacao){
		$this->situacao = $situacao;
	}

	public function getMotivoSituacao(){
		return $this->motivo_situacao;
	}

	public function setMotivoSituacao($motivo_situacao){
		$this->motivo_situacao = $motivo_situacao;
	}

    public function __construct() {
        $this->bd = conectaBd();
    }

    public function buscarProjetosDoProfessor() {
        $query = "Select projetos.*, usuario.nome as nome_aluno from projetos INNER JOIN usuario ON projetos.aluno = usuario.cpf WHERE professor =:professor";
        $stmt = $this->bd->prepare($query);
        $stmt->bindValue(':professor', $this->getProfessor());
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

	public function buscarProjetoDoAluno() {
        $query = "Select projetos.*, usuario.nome as nome_professor from projetos INNER JOIN usuario ON projetos.professor = usuario.cpf WHERE aluno =:aluno";
        $stmt = $this->bd->prepare($query);
        $stmt->bindValue(':aluno', $this->getAluno());
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

	public function buscarProjetos()
	{
		$query = "Select projetos.*, usuario.nome as aluno_nome, usuario.matricula as aluno_matricula from projetos INNER JOIN usuario ON projetos.aluno = usuario.cpf";
        $stmt = $this->bd->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

    public function cadastrar(){
		$query = "Insert into projetos (nome, situacao, professor, aluno, descricao) Values (:nome, :situacao, :professor, :aluno, :descricao)";
		$stmt = $this->bd->prepare($query);
		$stmt->bindValue(':nome', $this->getNome());
		$stmt->bindValue(':situacao', $this->getSituacao());
		$stmt->bindValue(':professor', $this->getProfessor());
		$stmt->bindValue(':aluno', $this->getAluno());
		$stmt->bindValue(':descricao', $this->getDescricao());
		$stmt->execute();
	}

	public function definirSituacao ()
	{
		$query = "UPDATE projetos SET motivo_situacao =:motivo_situacao, situacao =:situacao WHERE id_projeto =:projeto";
		$stmt = $this->bd->prepare($query);
		$stmt->bindValue(':motivo_situacao', $this->getMotivoSituacao());
		$stmt->bindValue(':situacao', $this->getSituacao());
		$stmt->bindValue(':projeto', $this->getIdProjeto());
		$stmt->execute();
	}

	public function buscarRelatoriosComProjetos()
	{
		$query = "SELECT projetos.*, usuario.nome as nome_aluno, usuario.matricula, relatorios.carga_horaria, relatorios.descricao as relatorio_descricao, relatorios.id_relatorio, relatorios.data_envio from projetos INNER JOIN usuario ON projetos.aluno = usuario.cpf INNER JOIN relatorios ON projetos.id_projeto = relatorios.projeto WHERE relatorios.situacao = 'aguardando'";
		$stmt = $this->bd->prepare($query);
		$stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
}

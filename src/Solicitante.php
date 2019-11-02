<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="solicitante", schema="prj_solicitacoes")
 */
class Solicitante
{
	/**
	 * @var int
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="bigint")
	 */
	private $id;
	/**
	 * @var int
	 * @ORM\Column(type="bigint")
	 */
	private $id_contato;
	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $nome;
	/**
	 * @var int
	 * @ORM\Column(type="bigint")
	 */
	private $id_area;
	/**
	 * @var DateTime
	 * @ORM\Column(type="date")
	 */
	private $data_cadastro;
	/**
	 * @var int
	 * @ORM\Column(name="id_statussolicitante", type="bigint")
	 */
	private $id_status_solicitante;

	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId(int $id): void
	{
		$this->id = $id;
	}

	/**
	 * @return int
	 */
	public function getIdContato(): int
	{
		return $this->id_contato;
	}

	/**
	 * @param int $id_contato
	 */
	public function setIdContato(int $id_contato): void
	{
		$this->id_contato = $id_contato;
	}

	/**
	 * @return string
	 */
	public function getNome(): string
	{
		return $this->nome;
	}

	/**
	 * @param string $nome
	 */
	public function setNome(string $nome): void
	{
		$this->nome = $nome;
	}

	/**
	 * @return int
	 */
	public function getIdArea(): int
	{
		return $this->id_area;
	}

	/**
	 * @param int $id_area
	 */
	public function setIdArea(int $id_area): void
	{
		$this->id_area = $id_area;
	}

	/**
	 * @return DateTime
	 */
	public function getDataCadastro(): DateTime
	{
		return $this->data_cadastro;
	}

	/**
	 * @param DateTime $data_cadastro
	 */
	public function setDataCadastro(DateTime $data_cadastro): void
	{
		$this->data_cadastro = $data_cadastro;
	}

	/**
	 * @return int
	 */
	public function getIdStatusSolicitante(): int
	{
		return $this->id_status_solicitante;
	}

	/**
	 * @param int $id_status_solicitante
	 */
	public function setIdStatusSolicitante(int $id_status_solicitante): void
	{
		$this->id_status_solicitante = $id_status_solicitante;
	}

}

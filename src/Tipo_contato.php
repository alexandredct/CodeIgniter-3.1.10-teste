<?php

namespace Entidade;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tipo_contato", schema="prj_solicitacoes")
 */
class Tipo_contato
{
	/**
	 * @var int
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="bigint")
	 */
	private $id;

	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $nome;

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
}

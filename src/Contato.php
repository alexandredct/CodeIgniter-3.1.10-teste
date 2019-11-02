<?php
require_once 'Tipo_contato.php';

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contato", schema="prj_solicitacoes")
 */
class Contato
{
	/**
	 * @var int
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="bigint")
	 */
	private $id;
	/**
	 * @var Tipo_contato
	 * @ORM\ManyToOne(targetEntity="Tipo_contato")
	 * @ORM\JoinColumn(name="id_tipocontato", referencedColumnName="id")
	 */
	private $tipo_contato;
	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $contato;

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
	 * @return Tipo_contato
	 */
	public function getTipoContato(): Tipo_contato
	{
		return $this->tipo_contato;
	}

	/**
	 * @param Tipo_contato $tipo_contato
	 */
	public function setTipoContato(Tipo_contato $tipo_contato): void
	{
		$this->tipo_contato = $tipo_contato;
	}

	/**
	 * @return string
	 */
	public function getContato(): string
	{
		return $this->contato;
	}

	/**
	 * @param string $contato
	 */
	public function setContato(string $contato): void
	{
		$this->contato = $contato;
	}
}

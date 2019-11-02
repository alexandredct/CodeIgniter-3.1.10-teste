<?php


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="solicitacao", schema="prj_solicitacoes")
 */
class Solicitacao
{
	/**
	 * @var int
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="bigint")
	 */
	private $id;
	/**
	 * @var Solicitante
	 * @ORM\Column(type="bigint")
	 * @ORM\OneToMany(targetEntity="Solicitante", mappedBy="id_solicitante")
	 */
	private $solicitante;
	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $descricao;
	/**
	 * @var int
	 * @ORM\Column(name="id_statussolicitacao",type="bigint")
	 */
	private $id_status_solicitacao;

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


}

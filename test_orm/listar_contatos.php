<?php

try {
	require_once "../bootstrap.php";
	$contatoRepository = $entityManager->getRepository('Contato');
	$contatos = $contatoRepository->findAll();

	foreach ($contatos as $contato) {
		echo "<pre>";
		print_r($contato);
		echo "</pre>";
	}
} catch (Exception $e) {
	echo '<pre>', $e, '</pre>';
}


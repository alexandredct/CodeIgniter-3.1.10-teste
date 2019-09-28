<?php

try {
	require_once "../bootstrap.php";
	$productRepository = $entityManager->getRepository('Area');
	$products = $productRepository->findAll();

	foreach ($products as $product) {
		echo "ID: " . $product->getId(), " / Nome: " . $product->getNome(), "<br>";
	}
} catch (Exception $e) {
	echo '<pre>', $e, '</pre>';
}


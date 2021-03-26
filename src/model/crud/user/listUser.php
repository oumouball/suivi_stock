<?php
require_once "../../../bootstrap.php";

$userRepository = $entityManager->getRepository('User');
$users = $userRepository->findAll();

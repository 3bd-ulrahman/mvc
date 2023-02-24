<?php
use Ramsey\Uuid\UuidFactory;

require_once __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();

var_dump($paddleTransaction);
// $id = new UuidFactory;
// echo $id->uuid4();
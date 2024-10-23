<?php

require __DIR__ . '/../vendor/autoload.php';  // Memuat autoload Composer

use DataValidator\validator;  // Menggunakan huruf kecil

$validator = new validator();  // Membuat instance dari validator

// Menguji validasi email
$email = "test@example.com";
echo $validator->validateEmail($email) ? "Valid email\n" : "Invalid email\n";

// Menguji validasi URL
$url = "https://example.com";
echo $validator->validateUrl($url) ? "Valid URL\n" : "Invalid URL\n";

// Menguji validasi nomor telepon
$phone = "+628123456789";
echo $validator->validatePhoneNumber($phone) ? "Valid phone number\n" : "Invalid phone number\n";

// Menguji validasi panjang string
$string = "HelloWorld";
echo $validator->validateStringLength($string, 5, 15) ? "Valid length\n" : "Invalid length\n";

// Menguji validasi alphanumeric
$alphanumeric = "Test123";
echo $validator->validateAlphanumeric($alphanumeric) ? "Valid alphanumeric\n" : "Invalid alphanumeric\n";

// Menguji validasi UUID
$uuid = "123e4567-e89b-12d3-a456-426614174000";
echo $validator->validateUUID($uuid) ? "Valid UUID\n" : "Invalid UUID\n";

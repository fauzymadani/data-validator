<?php

namespace DataValidator;

class validator
{
  // Validasi email
  public function validateEmail(string $email): bool
  {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
  }
  // Validasi URL
  public function validateUrl(string $url): bool
  {
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
  }

  // Validasi nomor telepon (format sederhana, bisa disesuaikan)
  public function validatePhoneNumber(string $phone): bool
  {
    return preg_match('/^\+?[0-9]{10,14}$/', $phone);
  }

  // Validasi panjang minimal dan maksimal string
  public function validateStringLength(string $string, int $min, int $max): bool
  {
    $length = strlen($string);
    return $length >= $min && $length <= $max;
  }

  // Validasi apakah string berisi hanya huruf dan angka
  public function validateAlphanumeric(string $string): bool
  {
    return ctype_alnum($string);
  }

  // Validasi format UUID
  public function validateUUID(string $uuid): bool
  {
    return preg_match('/^[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}$/', $uuid);
  }
}

<?php

namespace App\Model\Validation\Rules;

use App\Model\Constant\UserRole;
use App\Model\Constant\ValidationType;

class GetUsersValidationRules {
// Validation rules
  public static array $validationRules = [
    'role' => [
      'label' => 'User Role',
      'rules' => []
    ],
    'enabled' => [
      'label' => 'User status',
      'rules' => [ValidationType::BOOLEAN]
    ],
  ];

  // Get validation rules
  public static function getValidationRules(): array {
    self::$validationRules['role']['extra'] = UserRole::getConstants();

    return self::$validationRules;
  }
}

<?php

namespace App\Model\Validation\Rules;

use App\Model\Constant\MediaType;
use App\Model\Validation\ValidationRules;
use App\Model\Constant\ValidationType;


class MediaUploadValidationRules extends ValidationRules {
  // Validation rules
  public static array $validationRules = [
    'type' => [
      'label' => 'Upload Type',
      'rules' => [ValidationType::REQUIRED]
    ],
  ];

  // Get validation rules
  public static function getValidationRules(): array {
    self::$validationRules['type']['extra'] = MediaType::getConstants();

    return self::$validationRules;
  }
}

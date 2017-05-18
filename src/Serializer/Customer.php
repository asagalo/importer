<?php

namespace Vindi\Importer\Serializer;

class Customer extends AbstractSerializer
{
  public $name;
  public $email;
  public $registry_code;
  public $code;
  public $notes;

  public function filter_registry_code($value)
  {
    return preg_replace('/[^0-9]+/', '', $value);
  }
}

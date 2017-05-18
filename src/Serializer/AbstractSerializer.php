<?php

namespace Vindi\Importer\Serializer;

abstract class AbstractSerializer implements \JsonSerializable
{
  public function __construct(array $values)
  {
      foreach($values as $param => $value) {
        if(method_exists($this, "filter_{$param}")) {
          $this->{$param} = $this->{"filter_{$param}"}($value);
        } else {
          $this->{$param} = $value;
        }
      }
  }

  public function jsonSerialize()
  {
    return $this;
  }

  public function serialize()
  {
    return json_encode($this);
  }
}

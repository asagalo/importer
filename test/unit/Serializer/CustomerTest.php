<?php

namespace Vindi\Importer\Serializer;

class CustomerTest extends \PHPUnit\Framework\TestCase
{
  public $defaultParams = [
    'name'          => 'João da Silva',
    'email'         => 'joao@gmail.com',
    'registry_code' => '510.616.772-81',
    'code'          => '213',
    'notes'         => 'some notes'
  ];

  public function testIfSerializerReturnsAJson()
  {
    $object = new Customer($this->defaultParams);

    $this->assertEquals($object->serialize(), '{"name":"Jo\u00e3o da Silva","email":"joao@gmail.com","registry_code":"51061677281","code":"213","notes":"some notes"}');
  }

  public function testIfSerializerFilterRegistryCode()
  {
    $object = new Customer($this->defaultParams);

    $jsonReturn = json_decode($object->serialize());
    $this->assertEquals($jsonReturn->registry_code, '51061677281');
  }
}

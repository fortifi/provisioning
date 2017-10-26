<?php
namespace Fortifi\Provisioning;

abstract class ProvisioningEnum implements \JsonSerializable
{
  protected $_value = 'unknown';

  /**
   * @return []string
   */
  abstract public function getValues();

  public function __construct($value)
  {
    if(in_array($value, $this->getValues()))
    {
      $this->_value = $value;
    }
  }

  public function value()
  {
    return $this->_value;
  }

  public function jsonSerialize()
  {
    return $this->value();
  }

  public function __toString()
  {
    return $this->value();
  }
}

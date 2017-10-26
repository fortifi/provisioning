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

  public function jsonSerialize()
  {
    return $this->__toString();
  }

  public function __toString()
  {
    return $this->_value;
  }
}

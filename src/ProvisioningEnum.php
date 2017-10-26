<?php
namespace Fortifi\Provisioning;

abstract class ProvisioningEnum
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

  public function __toString()
  {
    return $this->_value;
  }
}

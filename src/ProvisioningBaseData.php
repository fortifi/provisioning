<?php
namespace Fortifi\Provisioning;

use Packaged\Helpers\Objects;

abstract class ProvisioningBaseData
{
  /**
   * Time the request/response was made (microseconds)
   */
  public $timestamp;
  public $customerFid;
  public $subscriptionFid;

  /**
   * @var TransportProperty[]
   */
  public $properties = [];

  public function hydrate($from)
  {
    Objects::hydrate($this, $from);
    if(!empty($this->properties))
    {
      $newProps = [];
      foreach($this->properties as $prop)
      {
        $newProp = new TransportProperty();
        Objects::hydrate($newProp, $prop);
        $newProps[] = $newProp;
      }
      $this->properties = $newProps;
    }
    return $this;
  }
}

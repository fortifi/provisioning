<?php
namespace Fortifi\Provisioning;

class ProvisioningResponse extends ProvisioningBaseData
{
  /**
   * @var ResponseType
   */
  public $type;
  /**
   * Status Message
   *
   * @var string
   */
  public $message;

  /**
   * @var LogMessage[]
   */
  public $log;

  public function hydrate($from)
  {
    parent::hydrate($from);
    $this->type = new ResponseType($this->type);
    return $this;
  }
}

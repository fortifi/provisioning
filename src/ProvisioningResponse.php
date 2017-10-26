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
}

<?php
namespace Fortifi\Provisioning;

class ResponseType extends ProvisioningEnum
{
  /**
   * Request Handled
   */
  const SUCCESS = 'success';
  /**
   * Request Processing
   */
  const PROCESSING = 'processing';
  /**
   * Request Failed
   */
  const FAILED = 'failed';

  public function getValues()
  {
    return [
      self::SUCCESS    => self::SUCCESS,
      self::PROCESSING => self::PROCESSING,
      self::FAILED     => self::FAILED,
    ];
  }
}

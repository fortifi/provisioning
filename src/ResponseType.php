<?php
namespace Fortifi\Provisioning;

class ResponseType
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

  public function __toString()
  {
    return 'unknown';
  }
}

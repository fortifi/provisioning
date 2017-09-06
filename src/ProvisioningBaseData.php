<?php
namespace Fortifi\Provisioning;

abstract class ProvisioningBaseData
{
  /**
   * Time the request/response was made (microseconds)
   */
  public $timestamp;
  public $customerFid;
  public $subscriptionFid;
}

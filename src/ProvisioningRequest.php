<?php
namespace Fortifi\Provisioning;

class ProvisioningRequest extends ProvisioningBaseData
{
  /**
   * @var RequestType
   */
  public $type;
  public $orderFid;
  public $productFid;
  public $priceFid;
  /**
   * Timestamp of the service start date
   */
  public $startTimestamp;
  /**
   * (optional) Timestamp of next renewal
   */
  public $renewTimestamp;
  /**
   * (optional) Timestamp of when the service should end
   */
  public $endTimestamp;
  /**
   * Configuration Data for the service
   *
   * @var array
   */
  public $configuration = [];
  /**
   * Service cycle period (ISO_8601) e.g. P1W
   * Leave blank for lifetime/onetime services
   */
  public $cycle;
}

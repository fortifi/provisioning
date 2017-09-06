<?php
namespace Fortifi\Provisioning;

use Packaged\Helpers\Objects;

class Provisioner
{
  /**
   * @param $json
   *
   * @return ProvisioningRequest
   */
  public static function fromRequest($json)
  {
    $decoded = json_decode($json);
    $request = new ProvisioningRequest();
    Objects::hydrate($request, $decoded);
    return $request;
  }

  /**
   * @param ProvisioningResponse $response
   *
   * @return string
   */
  public static function toResponse(ProvisioningResponse $response)
  {
    return json_encode($response);
  }
}

<?php
namespace Fortifi\Provisioning;

class Provisioner
{
  /**
   * @param $json
   *
   * @return ProvisioningRequest
   */
  public static function fromJsonRequest($json)
  {
    $decoded = json_decode($json);
    $request = new ProvisioningRequest();
    $request->hydrate($decoded);
    return $request;
  }

  /**
   * @param $json
   *
   * @return ProvisioningResponse
   */
  public static function fromJsonResponse($json)
  {
    $decoded = json_decode($json);
    $response = new ProvisioningResponse();
    $response->hydrate($decoded);
    return $response;
  }

  /**
   * @param ProvisioningBaseData $data
   *
   * @return string
   */
  public static function toJson(ProvisioningBaseData $data)
  {
    return json_encode($data);
  }
}

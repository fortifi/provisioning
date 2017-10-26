<?php
namespace Fortifi\Provisioning;

class RequestType extends ProvisioningEnum
{
  const SETUP = 'setup';
  const ACTIVATE = 'activate';
  const SUSPEND = 'suspend';
  const REACTIVATE = 'reactivate';
  const CANCEL = 'cancel';
  const END = 'end';

  public function getValues()
  {
    return [
      self::SETUP      => self::SETUP,
      self::ACTIVATE   => self::ACTIVATE,
      self::SUSPEND    => self::SUSPEND,
      self::REACTIVATE => self::REACTIVATE,
      self::CANCEL     => self::CANCEL,
      self::END        => self::END,
    ];
  }
}

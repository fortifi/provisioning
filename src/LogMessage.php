<?php
namespace Fortifi\Provisioning;

class LogMessage
{
  const DEBUG = 'debug';
  const INFO = 'info';
  const WARNING = 'warning';
  const ERROR = 'error';

  public $timestamp;
  public $type;
  public $message;
}

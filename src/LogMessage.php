<?php
namespace Fortifi\Provisioning;

class LogMessage
{
  const DEBUG = 'debug';
  const INFO = 'info';
  const WARNING = 'warning';
  const ERROR = 'error';

  const SOURCE_STATUS = 'status';
  const SOURCE_PROCESS = 'process';
  const SOURCE_LOG = 'log';

  public $timestamp;
  public $type;
  public $message;
}

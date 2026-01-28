<?php
namespace Fortifi\Api\Core\Exceptions\Client;

class NotAcceptableException extends ClientApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    string $message = '', int $code = 406, ?\Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Not Acceptable';
    }
    parent::__construct($message, $code, $previous);
  }
}

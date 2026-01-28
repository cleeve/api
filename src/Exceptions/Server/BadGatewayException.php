<?php
namespace Fortifi\Api\Core\Exceptions\Server;

class BadGatewayException extends ServerApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    string $message = '', int $code = 502, ?\Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Bad Gateway';
    }
    parent::__construct($message, $code, $previous);
  }
}

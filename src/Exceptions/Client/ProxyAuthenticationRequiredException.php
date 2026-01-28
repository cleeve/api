<?php
namespace Fortifi\Api\Core\Exceptions\Client;

class ProxyAuthenticationRequiredException extends ClientApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    string $message = '', int $code = 407, ?\Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Proxy Authentication Required';
    }
    parent::__construct($message, $code, $previous);
  }
}

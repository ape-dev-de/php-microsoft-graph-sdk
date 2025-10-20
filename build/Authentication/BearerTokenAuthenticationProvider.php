<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Authentication;

use Psr\Http\Message\RequestInterface;

class BearerTokenAuthenticationProvider implements AuthenticationProvider
{
    private string $accessToken;

    public function __construct(string $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function authenticate(RequestInterface $request): RequestInterface
    {
        return $request->withHeader('Authorization', 'Bearer ' . $this->accessToken);
    }
}
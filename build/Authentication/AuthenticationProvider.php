<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Authentication;

use Psr\Http\Message\RequestInterface;

interface AuthenticationProvider
{
    public function authenticate(RequestInterface $request): RequestInterface;
}
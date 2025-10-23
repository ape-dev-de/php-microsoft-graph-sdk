<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SpaApplication
 */
class SpaApplication
{
    /** 
     * Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent.
     * @var string[]
     */
    public array $redirectUris = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['redirectUris'])) {
            $this->redirectUris = $data['redirectUris'];
        }
    }
}

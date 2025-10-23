<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicClientApplication
 */
class PublicClientApplication
{
    /** 
     * Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent. For iOS and macOS apps, specify the value following the syntax msauth.{BUNDLEID}://auth, replacing '{BUNDLEID}'. For example, if the bundle ID is com.microsoft.identitysample.MSALiOS, the URI is msauth.com.microsoft.identitysample.MSALiOS://auth.
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

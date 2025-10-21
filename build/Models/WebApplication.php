<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WebApplication
 */
class WebApplication
{
    public function __construct(
        /** Home page or landing page of the application. */
        public ?string $homePageUrl = null,
        /** Specifies whether this web application can request tokens using the OAuth 2.0 implicit flow. */
        public ?ImplicitGrantSettings $implicitGrantSettings = null,
        /** Specifies the URL that is used by Microsoft's authorization service to log out a user using front-channel, back-channel or SAML logout protocols. */
        public ?string $logoutUrl = null,
        /** @var string[] Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent. */
        public array $redirectUris = [],
        /**  */
        public array $redirectUriSettings = []
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SocialIdentityProvider
 */
class SocialIdentityProvider
{
    public function __construct(
        /** The identifier for the client application obtained when registering the application with the identity provider. Required. */
        public ?string $clientId = null,
        /** The client secret for the application that is obtained when the application is registered with the identity provider. This is write-only. A read operation returns . Required. */
        public ?string $clientSecret = null,
        /** For a B2B scenario, possible values: Google, Facebook. For a B2C scenario, possible values: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo, QQ, WeChat. Required. */
        public ?string $identityProviderType = null
    ) {}
}

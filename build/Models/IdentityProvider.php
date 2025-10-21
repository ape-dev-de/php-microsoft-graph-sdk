<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityProvider
 */
class IdentityProvider
{
    public function __construct(
        /** The client ID for the application. This is the client ID obtained when registering the application with the identity provider. Required. Not nullable. */
        public ?string $clientId = null,
        /** The client secret for the application. This is the client secret obtained when registering the application with the identity provider. This is write-only. A read operation will return .  Required. Not nullable. */
        public ?string $clientSecret = null,
        /** The display name of the identity provider. Not nullable. */
        public ?string $name = null,
        /** The identity provider type is a required field. For B2B scenario: Google, Facebook. For B2C scenario: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo, QQ, WeChat, OpenIDConnect. Not nullable. */
        public ?string $type = null
    ) {}
}

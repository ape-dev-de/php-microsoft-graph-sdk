<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppleManagedIdentityProvider
 */
class AppleManagedIdentityProvider
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The display name of the identity provider. */
        public ?string $displayName = null,
        /** The certificate data, which is a long string of text from the certificate. Can be null. */
        public ?string $certificateData = null,
        /** The Apple developer identifier. Required. */
        public ?string $developerId = null,
        /** The Apple key identifier. Required. */
        public ?string $keyId = null,
        /** The Apple service identifier. Required. */
        public ?string $serviceId = null
    ) {}
}

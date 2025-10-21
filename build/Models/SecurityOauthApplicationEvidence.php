<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityOauthApplicationEvidence
 */
class SecurityOauthApplicationEvidence
{
    public function __construct(
        /** Unique identifier of the application. */
        public ?string $appId = null,
        /** Name of the application. */
        public ?string $displayName = null,
        /** The unique identifier of the application object in Azure AD. */
        public ?string $objectId = null,
        /** The name of the application publisher. */
        public ?string $publisher = null
    ) {}
}

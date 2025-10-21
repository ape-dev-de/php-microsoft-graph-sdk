<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedMobileApp
 */
class ManagedMobileApp
{
    public function __construct(
        /** The identifier for an app with it's operating system type. */
        public ?string $mobileAppIdentifier = null,
        /** The identifier for the deployment an app. */
        public ?string $version = null
    ) {}
}

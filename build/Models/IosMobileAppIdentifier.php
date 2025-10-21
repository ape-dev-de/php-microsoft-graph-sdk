<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosMobileAppIdentifier
 */
class IosMobileAppIdentifier
{
    public function __construct(
        /** The identifier for an iOS app. */
        public ?string $bundleId = null
    ) {}
}

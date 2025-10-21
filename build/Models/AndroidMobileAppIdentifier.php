<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidMobileAppIdentifier
 */
class AndroidMobileAppIdentifier
{
    public function __construct(
        /** The identifier for an Android app. */
        public ?string $packageId = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidMobileAppIdentifier
 */
class AndroidMobileAppIdentifier
{
    public function __construct(
        /** The identifier for an app, as specified in the play store. */
        public ?string $packageId = null
    ) {}
}

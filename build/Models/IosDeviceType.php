<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosDeviceType
 */
class IosDeviceType
{
    public function __construct(
        /** Whether the app should run on iPads. */
        public ?bool $iPad = null,
        /** Contains properties of the possible iOS device types the mobile app can run on. */
        public ?string $iPhoneAndIPod = null
    ) {}
}

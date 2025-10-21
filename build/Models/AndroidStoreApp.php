<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidStoreApp
 */
class AndroidStoreApp
{
    public function __construct(
        /** The Android app store URL. */
        public ?string $appStoreUrl = null,
        /** The value for the minimum applicable operating system. */
        public ?string $minimumSupportedOperatingSystem = null,
        /** Contains properties and inherited properties for Android store apps. */
        public ?string $packageId = null
    ) {}
}

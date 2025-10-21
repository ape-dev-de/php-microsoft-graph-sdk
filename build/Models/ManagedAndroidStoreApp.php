<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAndroidStoreApp
 */
class ManagedAndroidStoreApp
{
    public function __construct(
        /** The Android AppStoreUrl. */
        public ?string $appStoreUrl = null,
        /**  */
        public ?string $minimumSupportedOperatingSystem = null,
        /** Contains properties and inherited properties for Android store apps that you can manage with an Intune app protection policy. */
        public ?string $packageId = null
    ) {}
}

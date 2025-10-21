<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedIOSStoreApp
 */
class ManagedIOSStoreApp
{
    public function __construct(
        /**  */
        public ?string $applicableDeviceType = null,
        /** The Apple AppStoreUrl. */
        public ?string $appStoreUrl = null,
        /** The app's Bundle ID. */
        public ?string $bundleId = null,
        /** Contains properties and inherited properties for an iOS store app that you can manage with an Intune app protection policy. */
        public ?string $minimumSupportedOperatingSystem = null
    ) {}
}

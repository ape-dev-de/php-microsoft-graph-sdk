<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosStoreApp
 */
class IosStoreApp
{
    public function __construct(
        /**  */
        public ?string $applicableDeviceType = null,
        /** The Apple App Store URL */
        public ?string $appStoreUrl = null,
        /** The Identity Name. */
        public ?string $bundleId = null,
        /** Contains properties and inherited properties for iOS store apps. */
        public ?string $minimumSupportedOperatingSystem = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAndroidLobApp
 */
class ManagedAndroidLobApp
{
    public function __construct(
        /** The value for the minimum applicable operating system. */
        public ?string $minimumSupportedOperatingSystem = null,
        /** The package identifier. */
        public ?string $packageId = null,
        /** The version code of managed Android Line of Business (LoB) app. */
        public ?string $versionCode = null,
        /** Contains properties and inherited properties for Managed Android Line Of Business apps. */
        public ?string $versionName = null
    ) {}
}

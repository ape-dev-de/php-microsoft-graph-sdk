<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosLobApp
 */
class IosLobApp
{
    public function __construct(
        /**  */
        public ?string $applicableDeviceType = null,
        /** The build number of iOS Line of Business (LoB) app. */
        public ?string $buildNumber = null,
        /** The Identity Name. */
        public ?string $bundleId = null,
        /** The expiration time. */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** The value for the minimum applicable operating system. */
        public ?string $minimumSupportedOperatingSystem = null,
        /** Contains properties and inherited properties for iOS Line Of Business apps. */
        public ?string $versionNumber = null
    ) {}
}

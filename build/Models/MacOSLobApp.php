<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSLobApp
 */
class MacOSLobApp
{
    public function __construct(
        /** The build number of the package. This should match the package CFBundleShortVersionString of the .pkg file. */
        public ?string $buildNumber = null,
        /** The primary bundleId of the package. */
        public ?string $bundleId = null,
        /** List of ComplexType macOSLobChildApp objects. Represents the apps expected to be installed by the package. */
        public array $childApps = [],
        /** When TRUE, indicates that the app''s version will NOT be used to detect if the app is installed on a device. When FALSE, indicates that the app''s version will be used to detect if the app is installed on a device. Set this to true for apps that use a self update feature. */
        public ?bool $ignoreVersionDetection = null,
        /** When TRUE, indicates that the app will be installed as managed (requires macOS 11.0 and other managed package restrictions). When FALSE, indicates that the app will be installed as unmanaged. */
        public ?bool $installAsManaged = null,
        /** @var string[] The MD5 hash codes. This is empty if the package was uploaded directly. If the Intune App Wrapping Tool is used to create a .intunemac, this value can be found inside the Detection.xml file. */
        public array $md5Hash = [],
        /** The chunk size for MD5 hash. This is ''0'' or empty if the package was uploaded directly. If the Intune App Wrapping Tool is used to create a .intunemac, this value can be found inside the Detection.xml file. */
        public ?float $md5HashChunkSize = null,
        /** ComplexType macOSMinimumOperatingSystem that indicates the minimum operating system applicable for the application. */
        public ?string $minimumSupportedOperatingSystem = null,
        /** Contains properties and inherited properties for the macOS LOB App. */
        public ?string $versionNumber = null
    ) {}
}

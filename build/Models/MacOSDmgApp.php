<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSDmgApp
 */
class MacOSDmgApp
{
    public function __construct(
        /** When TRUE, indicates that the app''s version will NOT be used to detect if the app is installed on a device. When FALSE, indicates that the app''s version will be used to detect if the app is installed on a device. Set this to true for apps that use a self update feature. The default value is FALSE. */
        public ?bool $ignoreVersionDetection = null,
        /** The list of .apps expected to be installed by the DMG (Apple Disk Image). This collection can contain a maximum of 500 elements. */
        public array $includedApps = [],
        /** ComplexType macOSMinimumOperatingSystem that indicates the minimum operating system applicable for the application. */
        public ?string $minimumSupportedOperatingSystem = null,
        /** The bundleId of the primary .app in the DMG (Apple Disk Image). This maps to the CFBundleIdentifier in the app's bundle configuration. */
        public ?string $primaryBundleId = null,
        /** Contains properties and inherited properties for the MacOS DMG (Apple Disk Image) App. */
        public ?string $primaryBundleVersion = null
    ) {}
}

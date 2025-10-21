<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobApp
 */
class Win32LobApp
{
    public function __construct(
        /** Indicates the Windows architecture(s) this app should be installed on. The app will be treated as not applicable for devices with architectures not matching the selected value. When a non-null value is provided for the `allowedArchitectures` property, the value of the `applicableArchitectures` property is set to `none`. Possible values are: `null`, `x86`, `x64`, `arm64`. */
        public ?string $allowedArchitectures = null,
        /**  */
        public ?string $applicableArchitectures = null,
        /** The command line to install this app */
        public ?string $installCommandLine = null,
        /** The install experience for this app. */
        public ?string $installExperience = null,
        /** The value for the minimum CPU speed which is required to install this app. */
        public ?float $minimumCpuSpeedInMHz = null,
        /** The value for the minimum free disk space which is required to install this app. */
        public ?float $minimumFreeDiskSpaceInMB = null,
        /** The value for the minimum physical memory which is required to install this app. */
        public ?float $minimumMemoryInMB = null,
        /** The value for the minimum number of processors which is required to install this app. */
        public ?float $minimumNumberOfProcessors = null,
        /** The value for the minimum supported windows release. */
        public ?string $minimumSupportedWindowsRelease = null,
        /** The MSI details if this Win32 app is an MSI app. */
        public ?string $msiInformation = null,
        /** The return codes for post installation behavior. */
        public array $returnCodes = [],
        /** The detection and requirement rules for this app. */
        public array $rules = [],
        /** The relative path of the setup file in the encrypted Win32LobApp package. */
        public ?string $setupFilePath = null,
        /** Contains properties and inherited properties for Win32 apps. */
        public ?string $uninstallCommandLine = null
    ) {}
}

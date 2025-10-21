<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobApp
 */
class Win32LobApp
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date and time the app was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The description of the app. */
        public ?string $description = null,
        /** The developer of the app. */
        public ?string $developer = null,
        /** The admin provided or imported title of the app. */
        public ?string $displayName = null,
        /** The more information Url. */
        public ?string $informationUrl = null,
        /** The value indicating whether the app is marked as featured by the admin. */
        public ?bool $isFeatured = null,
        /** The large icon, to be displayed in the app details and used for upload of the icon. */
        public ?MimeContent $largeIcon = null,
        /** The date and time the app was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Notes for the app. */
        public ?string $notes = null,
        /** The owner of the app. */
        public ?string $owner = null,
        /** The privacy statement Url. */
        public ?string $privacyInformationUrl = null,
        /** The publisher of the app. */
        public ?string $publisher = null,
        /**  */
        public ?MobileAppPublishingState $publishingState = null,
        /** The list of group assignments for this mobile app. */
        public array $assignments = [],
        /** The list of categories for this app. */
        public array $categories = [],
        /** The internal committed content version. */
        public ?string $committedContentVersion = null,
        /** The name of the main Lob application file. */
        public ?string $fileName = null,
        /** The total size, including all uploaded files. */
        public ?float $size = null,
        /** The list of content versions for this app. */
        public array $contentVersions = [],
        /** Indicates the Windows architecture(s) this app should be installed on. The app will be treated as not applicable for devices with architectures not matching the selected value. When a non-null value is provided for the `allowedArchitectures` property, the value of the `applicableArchitectures` property is set to `none`. Possible values are: `null`, `x86`, `x64`, `arm64`. */
        public ?WindowsArchitecture $allowedArchitectures = null,
        /**  */
        public ?WindowsArchitecture $applicableArchitectures = null,
        /** The command line to install this app */
        public ?string $installCommandLine = null,
        /** The install experience for this app. */
        public ?Win32LobAppInstallExperience $installExperience = null,
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
        public ?Win32LobAppMsiInformation $msiInformation = null,
        /** The return codes for post installation behavior. */
        public array $returnCodes = [],
        /** The detection and requirement rules for this app. */
        public array $rules = [],
        /** The relative path of the setup file in the encrypted Win32LobApp package. */
        public ?string $setupFilePath = null,
        /** The command line to uninstall this app */
        public ?string $uninstallCommandLine = null
    ) {}
}

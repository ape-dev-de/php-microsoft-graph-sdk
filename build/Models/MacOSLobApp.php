<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSLobApp
 */
class MacOSLobApp
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
        /** The build number of the package. This should match the package CFBundleShortVersionString of the .pkg file. */
        public ?string $buildNumber = null,
        /** The primary bundleId of the package. */
        public ?string $bundleId = null,
        /** List of ComplexType macOSLobChildApp objects. Represents the apps expected to be installed by the package. */
        public array $childApps = [],
        /** When TRUE, indicates that the app's version will NOT be used to detect if the app is installed on a device. When FALSE, indicates that the app's version will be used to detect if the app is installed on a device. Set this to true for apps that use a self update feature. */
        public ?bool $ignoreVersionDetection = null,
        /** When TRUE, indicates that the app will be installed as managed (requires macOS 11.0 and other managed package restrictions). When FALSE, indicates that the app will be installed as unmanaged. */
        public ?bool $installAsManaged = null,
        /** @var string[] The MD5 hash codes. This is empty if the package was uploaded directly. If the Intune App Wrapping Tool is used to create a .intunemac, this value can be found inside the Detection.xml file. */
        public array $md5Hash = [],
        /** The chunk size for MD5 hash. This is '0' or empty if the package was uploaded directly. If the Intune App Wrapping Tool is used to create a .intunemac, this value can be found inside the Detection.xml file. */
        public ?float $md5HashChunkSize = null,
        /** ComplexType macOSMinimumOperatingSystem that indicates the minimum operating system applicable for the application. */
        public ?MacOSMinimumOperatingSystem $minimumSupportedOperatingSystem = null,
        /** The version number of the package. This should match the package CFBundleVersion in the packageinfo file. */
        public ?string $versionNumber = null
    ) {}
}

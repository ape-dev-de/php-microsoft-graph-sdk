<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSDmgApp
 */
class MacOSDmgApp
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
        /** When TRUE, indicates that the app's version will NOT be used to detect if the app is installed on a device. When FALSE, indicates that the app's version will be used to detect if the app is installed on a device. Set this to true for apps that use a self update feature. The default value is FALSE. */
        public ?bool $ignoreVersionDetection = null,
        /** The list of .apps expected to be installed by the DMG (Apple Disk Image). This collection can contain a maximum of 500 elements. */
        public array $includedApps = [],
        /** ComplexType macOSMinimumOperatingSystem that indicates the minimum operating system applicable for the application. */
        public ?MacOSMinimumOperatingSystem $minimumSupportedOperatingSystem = null,
        /** The bundleId of the primary .app in the DMG (Apple Disk Image). This maps to the CFBundleIdentifier in the app's bundle configuration. */
        public ?string $primaryBundleId = null,
        /** The version of the primary .app in the DMG (Apple Disk Image). This maps to the CFBundleShortVersion in the app's bundle configuration. */
        public ?string $primaryBundleVersion = null
    ) {}
}

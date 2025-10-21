<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsAppX
 */
class WindowsAppX
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
        /**  */
        public ?WindowsArchitecture $applicableArchitectures = null,
        /** The identity name of the uploaded app package. For example: 'Contoso.DemoApp'. */
        public ?string $identityName = null,
        /** The identity publisher hash of the uploaded app package. This is the hash of the publisher from the manifest. For example: 'AB82CD0XYZ'. */
        public ?string $identityPublisherHash = null,
        /** The identity resource identifier of the uploaded app package. For example: 'TestResourceId'. */
        public ?string $identityResourceIdentifier = null,
        /** The identity version of the uploaded app package. For example: '1.0.0.0'. */
        public ?string $identityVersion = null,
        /** When TRUE, indicates that the app is a bundle. When FALSE, indicates that the app is not a bundle. By default, property is set to FALSE. */
        public ?bool $isBundle = null,
        /**  */
        public ?WindowsMinimumOperatingSystem $minimumSupportedOperatingSystem = null
    ) {}
}

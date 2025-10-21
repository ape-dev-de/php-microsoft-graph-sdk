<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAndroidStoreApp
 */
class ManagedAndroidStoreApp
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
        public ?string $largeIcon = null,
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
        public ?string $publishingState = null,
        /** The list of group assignments for this mobile app. */
        public array $assignments = [],
        /** The list of categories for this app. */
        public array $categories = [],
        /**  */
        public ?string $appAvailability = null,
        /** The Application's version. */
        public ?string $version = null,
        /** The Android AppStoreUrl. */
        public ?string $appStoreUrl = null,
        /**  */
        public ?string $minimumSupportedOperatingSystem = null,
        /** The app's package ID. */
        public ?string $packageId = null
    ) {}
}

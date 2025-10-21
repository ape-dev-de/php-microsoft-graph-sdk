<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedIOSStoreApp
 */
class ManagedIOSStoreApp
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
        /** @var string[] An abstract class containing the base properties for Intune mobile apps. Note: Listing mobile apps with `$expand=assignments` has been deprecated. Instead get the list of apps without the `$expand` query on `assignments`. Then, perform the expansion on individual applications. */
        public array $categories = [],
        /**  */
        public ?string $appAvailability = null,
        /** Abstract class that contains properties and inherited properties for apps that you can manage with an Intune app protection policy. */
        public ?string $version = null,
        /**  */
        public ?string $applicableDeviceType = null,
        /** The Apple AppStoreUrl. */
        public ?string $appStoreUrl = null,
        /** The app's Bundle ID. */
        public ?string $bundleId = null,
        /** Contains properties and inherited properties for an iOS store app that you can manage with an Intune app protection policy. */
        public ?string $minimumSupportedOperatingSystem = null
    ) {}
}

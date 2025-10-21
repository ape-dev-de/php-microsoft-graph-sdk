<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceAppManagement
 */
class DeviceAppManagement
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Whether the account is enabled for syncing applications from the Microsoft Store for Business. */
        public ?bool $isEnabledForMicrosoftStoreForBusiness = null,
        /** The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -<country/regioncode2>, where  is a lowercase two-letter code derived from ISO 639-1 and <country/regioncode2> is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture. */
        public ?string $microsoftStoreForBusinessLanguage = null,
        /** The last time an application sync from the Microsoft Store for Business was completed. */
        public ?\DateTimeInterface $microsoftStoreForBusinessLastCompletedApplicationSyncTime = null,
        /** The last time the apps from the Microsoft Store for Business were synced successfully for the account. */
        public ?\DateTimeInterface $microsoftStoreForBusinessLastSuccessfulSyncDateTime = null,
        /** Android managed app policies. */
        public array $androidManagedAppProtections = [],
        /** Default managed app policies. */
        public array $defaultManagedAppProtections = [],
        /** iOS managed app policies. */
        public array $iosManagedAppProtections = [],
        /** Managed app policies. */
        public array $managedAppPolicies = [],
        /** The managed app registrations. */
        public array $managedAppRegistrations = [],
        /** The managed app statuses. */
        public array $managedAppStatuses = [],
        /** The Managed eBook. */
        public array $managedEBooks = [],
        /** Windows information protection for apps running on devices which are MDM enrolled. */
        public array $mdmWindowsInformationProtectionPolicies = [],
        /** The mobile app categories. */
        public array $mobileAppCategories = [],
        /** The Managed Device Mobile Application Configurations. */
        public array $mobileAppConfigurations = [],
        /** The mobile app relationship represents the dependency or supersedence relationship between two Intune mobile LOB applications. */
        public array $mobileAppRelationships = [],
        /** The mobile apps. */
        public array $mobileApps = [],
        /** Targeted managed app configurations. */
        public array $targetedManagedAppConfigurations = [],
        /** List of Vpp tokens for this organization. */
        public array $vppTokens = [],
        /** Windows information protection for apps running on devices which are not MDM enrolled. */
        public array $windowsInformationProtectionPolicies = []
    ) {}
}

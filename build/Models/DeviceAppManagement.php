<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceAppManagement
 */
class DeviceAppManagement
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Whether the account is enabled for syncing applications from the Microsoft Store for Business. */
    public ?bool $isEnabledForMicrosoftStoreForBusiness = null;

    /** The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -<country/regioncode2>, where  is a lowercase two-letter code derived from ISO 639-1 and <country/regioncode2> is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture. */
    public ?string $microsoftStoreForBusinessLanguage = null;

    /** The last time an application sync from the Microsoft Store for Business was completed. */
    public ?\DateTimeInterface $microsoftStoreForBusinessLastCompletedApplicationSyncTime = null;

    /** The last time the apps from the Microsoft Store for Business were synced successfully for the account. */
    public ?\DateTimeInterface $microsoftStoreForBusinessLastSuccessfulSyncDateTime = null;

    /** 
     * Android managed app policies.
     * @var AndroidManagedAppProtection[]
     */
    public array $androidManagedAppProtections = [];

    /** 
     * Default managed app policies.
     * @var DefaultManagedAppProtection[]
     */
    public array $defaultManagedAppProtections = [];

    /** 
     * iOS managed app policies.
     * @var IosManagedAppProtection[]
     */
    public array $iosManagedAppProtections = [];

    /** 
     * Managed app policies.
     * @var ManagedAppPolicy[]
     */
    public array $managedAppPolicies = [];

    /** 
     * The managed app registrations.
     * @var ManagedAppRegistration[]
     */
    public array $managedAppRegistrations = [];

    /** 
     * The managed app statuses.
     * @var ManagedAppStatus[]
     */
    public array $managedAppStatuses = [];

    /** 
     * The Managed eBook.
     * @var ManagedEBook[]
     */
    public array $managedEBooks = [];

    /** 
     * Windows information protection for apps running on devices which are MDM enrolled.
     * @var MdmWindowsInformationProtectionPolicy[]
     */
    public array $mdmWindowsInformationProtectionPolicies = [];

    /** 
     * The mobile app categories.
     * @var MobileAppCategory[]
     */
    public array $mobileAppCategories = [];

    /** 
     * The Managed Device Mobile Application Configurations.
     * @var ManagedDeviceMobileAppConfiguration[]
     */
    public array $mobileAppConfigurations = [];

    /** 
     * The mobile app relationship represents the dependency or supersedence relationship between two Intune mobile LOB applications.
     * @var MobileAppRelationship[]
     */
    public array $mobileAppRelationships = [];

    /** 
     * The mobile apps.
     * @var MobileApp[]
     */
    public array $mobileApps = [];

    /** 
     * Targeted managed app configurations.
     * @var TargetedManagedAppConfiguration[]
     */
    public array $targetedManagedAppConfigurations = [];

    /** 
     * List of Vpp tokens for this organization.
     * @var VppToken[]
     */
    public array $vppTokens = [];

    /** 
     * Windows information protection for apps running on devices which are not MDM enrolled.
     * @var WindowsInformationProtectionPolicy[]
     */
    public array $windowsInformationProtectionPolicies = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['isEnabledForMicrosoftStoreForBusiness'])) {
            $this->isEnabledForMicrosoftStoreForBusiness = $data['isEnabledForMicrosoftStoreForBusiness'];
        }
        if (isset($data['microsoftStoreForBusinessLanguage'])) {
            $this->microsoftStoreForBusinessLanguage = $data['microsoftStoreForBusinessLanguage'];
        }
        if (isset($data['microsoftStoreForBusinessLastCompletedApplicationSyncTime'])) {
            $this->microsoftStoreForBusinessLastCompletedApplicationSyncTime = is_string($data['microsoftStoreForBusinessLastCompletedApplicationSyncTime']) ? new \DateTimeImmutable($data['microsoftStoreForBusinessLastCompletedApplicationSyncTime']) : $data['microsoftStoreForBusinessLastCompletedApplicationSyncTime'];
        }
        if (isset($data['microsoftStoreForBusinessLastSuccessfulSyncDateTime'])) {
            $this->microsoftStoreForBusinessLastSuccessfulSyncDateTime = is_string($data['microsoftStoreForBusinessLastSuccessfulSyncDateTime']) ? new \DateTimeImmutable($data['microsoftStoreForBusinessLastSuccessfulSyncDateTime']) : $data['microsoftStoreForBusinessLastSuccessfulSyncDateTime'];
        }
        if (isset($data['androidManagedAppProtections'])) {
            $this->androidManagedAppProtections = $data['androidManagedAppProtections'];
        }
        if (isset($data['defaultManagedAppProtections'])) {
            $this->defaultManagedAppProtections = $data['defaultManagedAppProtections'];
        }
        if (isset($data['iosManagedAppProtections'])) {
            $this->iosManagedAppProtections = $data['iosManagedAppProtections'];
        }
        if (isset($data['managedAppPolicies'])) {
            $this->managedAppPolicies = $data['managedAppPolicies'];
        }
        if (isset($data['managedAppRegistrations'])) {
            $this->managedAppRegistrations = $data['managedAppRegistrations'];
        }
        if (isset($data['managedAppStatuses'])) {
            $this->managedAppStatuses = $data['managedAppStatuses'];
        }
        if (isset($data['managedEBooks'])) {
            $this->managedEBooks = $data['managedEBooks'];
        }
        if (isset($data['mdmWindowsInformationProtectionPolicies'])) {
            $this->mdmWindowsInformationProtectionPolicies = $data['mdmWindowsInformationProtectionPolicies'];
        }
        if (isset($data['mobileAppCategories'])) {
            $this->mobileAppCategories = $data['mobileAppCategories'];
        }
        if (isset($data['mobileAppConfigurations'])) {
            $this->mobileAppConfigurations = $data['mobileAppConfigurations'];
        }
        if (isset($data['mobileAppRelationships'])) {
            $this->mobileAppRelationships = $data['mobileAppRelationships'];
        }
        if (isset($data['mobileApps'])) {
            $this->mobileApps = $data['mobileApps'];
        }
        if (isset($data['targetedManagedAppConfigurations'])) {
            $this->targetedManagedAppConfigurations = $data['targetedManagedAppConfigurations'];
        }
        if (isset($data['vppTokens'])) {
            $this->vppTokens = $data['vppTokens'];
        }
        if (isset($data['windowsInformationProtectionPolicies'])) {
            $this->windowsInformationProtectionPolicies = $data['windowsInformationProtectionPolicies'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

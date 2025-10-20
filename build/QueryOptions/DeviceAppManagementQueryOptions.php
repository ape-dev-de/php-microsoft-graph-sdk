<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceAppManagement resources
 *
 * Available select fields:
 * - isEnabledForMicrosoftStoreForBusiness
 * - microsoftStoreForBusinessLanguage
 * - microsoftStoreForBusinessLastCompletedApplicationSyncTime
 * - microsoftStoreForBusinessLastSuccessfulSyncDateTime
 * - androidManagedAppProtections
 * - defaultManagedAppProtections
 * - iosManagedAppProtections
 * - managedAppPolicies
 * - managedAppRegistrations
 * - managedAppStatuses
 * - managedEBooks
 * - mdmWindowsInformationProtectionPolicies
 * - mobileAppCategories
 * - mobileAppConfigurations
 * - mobileAppRelationships
 * - mobileApps
 * - targetedManagedAppConfigurations
 * - vppTokens
 * - windowsInformationProtectionPolicies
 */
class DeviceAppManagementQueryOptions extends QueryOptions
{
    public const FIELD_IS_ENABLED_FOR_MICROSOFT_STORE_FOR_BUSINESS = 'isEnabledForMicrosoftStoreForBusiness';
    public const FIELD_MICROSOFT_STORE_FOR_BUSINESS_LANGUAGE = 'microsoftStoreForBusinessLanguage';
    public const FIELD_MICROSOFT_STORE_FOR_BUSINESS_LAST_COMPLETED_APPLICATION_SYNC_TIME = 'microsoftStoreForBusinessLastCompletedApplicationSyncTime';
    public const FIELD_MICROSOFT_STORE_FOR_BUSINESS_LAST_SUCCESSFUL_SYNC_DATE_TIME = 'microsoftStoreForBusinessLastSuccessfulSyncDateTime';
    public const FIELD_ANDROID_MANAGED_APP_PROTECTIONS = 'androidManagedAppProtections';
    public const FIELD_DEFAULT_MANAGED_APP_PROTECTIONS = 'defaultManagedAppProtections';
    public const FIELD_IOS_MANAGED_APP_PROTECTIONS = 'iosManagedAppProtections';
    public const FIELD_MANAGED_APP_POLICIES = 'managedAppPolicies';
    public const FIELD_MANAGED_APP_REGISTRATIONS = 'managedAppRegistrations';
    public const FIELD_MANAGED_APP_STATUSES = 'managedAppStatuses';
    public const FIELD_MANAGED_EBOOKS = 'managedEBooks';
    public const FIELD_MDM_WINDOWS_INFORMATION_PROTECTION_POLICIES = 'mdmWindowsInformationProtectionPolicies';
    public const FIELD_MOBILE_APP_CATEGORIES = 'mobileAppCategories';
    public const FIELD_MOBILE_APP_CONFIGURATIONS = 'mobileAppConfigurations';
    public const FIELD_MOBILE_APP_RELATIONSHIPS = 'mobileAppRelationships';
    public const FIELD_MOBILE_APPS = 'mobileApps';
    public const FIELD_TARGETED_MANAGED_APP_CONFIGURATIONS = 'targetedManagedAppConfigurations';
    public const FIELD_VPP_TOKENS = 'vppTokens';
    public const FIELD_WINDOWS_INFORMATION_PROTECTION_POLICIES = 'windowsInformationProtectionPolicies';

    /**
     * Select specific DeviceAppManagement properties
     * 
     * @param array<string> $select Use DeviceAppManagementQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

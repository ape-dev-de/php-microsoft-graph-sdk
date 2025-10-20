<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppProtection resources
 *
 * Available select fields:
 * - allowedDataStorageLocations
 * - allowedInboundDataTransferSources
 * - allowedOutboundClipboardSharingLevel
 * - allowedOutboundDataTransferDestinations
 * - contactSyncBlocked
 * - dataBackupBlocked
 * - deviceComplianceRequired
 * - disableAppPinIfDevicePinIsSet
 * - fingerprintBlocked
 * - managedBrowser
 * - managedBrowserToOpenLinksRequired
 * - maximumPinRetries
 * - minimumPinLength
 * - minimumRequiredAppVersion
 * - minimumRequiredOsVersion
 * - minimumWarningAppVersion
 * - minimumWarningOsVersion
 * - organizationalCredentialsRequired
 * - periodBeforePinReset
 * - periodOfflineBeforeAccessCheck
 * - periodOfflineBeforeWipeIsEnforced
 * - periodOnlineBeforeAccessCheck
 * - pinCharacterSet
 * - pinRequired
 * - printBlocked
 * - saveAsBlocked
 * - simplePinBlocked
 */
class ManagedAppProtectionQueryOptions extends QueryOptions
{
    public const FIELD_ALLOWED_DATA_STORAGE_LOCATIONS = 'allowedDataStorageLocations';
    public const FIELD_ALLOWED_INBOUND_DATA_TRANSFER_SOURCES = 'allowedInboundDataTransferSources';
    public const FIELD_ALLOWED_OUTBOUND_CLIPBOARD_SHARING_LEVEL = 'allowedOutboundClipboardSharingLevel';
    public const FIELD_ALLOWED_OUTBOUND_DATA_TRANSFER_DESTINATIONS = 'allowedOutboundDataTransferDestinations';
    public const FIELD_CONTACT_SYNC_BLOCKED = 'contactSyncBlocked';
    public const FIELD_DATA_BACKUP_BLOCKED = 'dataBackupBlocked';
    public const FIELD_DEVICE_COMPLIANCE_REQUIRED = 'deviceComplianceRequired';
    public const FIELD_DISABLE_APP_PIN_IF_DEVICE_PIN_IS_SET = 'disableAppPinIfDevicePinIsSet';
    public const FIELD_FINGERPRINT_BLOCKED = 'fingerprintBlocked';
    public const FIELD_MANAGED_BROWSER = 'managedBrowser';
    public const FIELD_MANAGED_BROWSER_TO_OPEN_LINKS_REQUIRED = 'managedBrowserToOpenLinksRequired';
    public const FIELD_MAXIMUM_PIN_RETRIES = 'maximumPinRetries';
    public const FIELD_MINIMUM_PIN_LENGTH = 'minimumPinLength';
    public const FIELD_MINIMUM_REQUIRED_APP_VERSION = 'minimumRequiredAppVersion';
    public const FIELD_MINIMUM_REQUIRED_OS_VERSION = 'minimumRequiredOsVersion';
    public const FIELD_MINIMUM_WARNING_APP_VERSION = 'minimumWarningAppVersion';
    public const FIELD_MINIMUM_WARNING_OS_VERSION = 'minimumWarningOsVersion';
    public const FIELD_ORGANIZATIONAL_CREDENTIALS_REQUIRED = 'organizationalCredentialsRequired';
    public const FIELD_PERIOD_BEFORE_PIN_RESET = 'periodBeforePinReset';
    public const FIELD_PERIOD_OFFLINE_BEFORE_ACCESS_CHECK = 'periodOfflineBeforeAccessCheck';
    public const FIELD_PERIOD_OFFLINE_BEFORE_WIPE_IS_ENFORCED = 'periodOfflineBeforeWipeIsEnforced';
    public const FIELD_PERIOD_ONLINE_BEFORE_ACCESS_CHECK = 'periodOnlineBeforeAccessCheck';
    public const FIELD_PIN_CHARACTER_SET = 'pinCharacterSet';
    public const FIELD_PIN_REQUIRED = 'pinRequired';
    public const FIELD_PRINT_BLOCKED = 'printBlocked';
    public const FIELD_SAVE_AS_BLOCKED = 'saveAsBlocked';
    public const FIELD_SIMPLE_PIN_BLOCKED = 'simplePinBlocked';

    /**
     * Select specific ManagedAppProtection properties
     * 
     * @param array<string> $select Use ManagedAppProtectionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

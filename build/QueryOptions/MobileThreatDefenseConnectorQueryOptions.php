<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileThreatDefenseConnector resources
 *
 * Available select fields:
 * - allowPartnerToCollectIOSApplicationMetadata
 * - allowPartnerToCollectIOSPersonalApplicationMetadata
 * - androidDeviceBlockedOnMissingPartnerData
 * - androidEnabled
 * - androidMobileApplicationManagementEnabled
 * - iosDeviceBlockedOnMissingPartnerData
 * - iosEnabled
 * - iosMobileApplicationManagementEnabled
 * - lastHeartbeatDateTime
 * - microsoftDefenderForEndpointAttachEnabled
 * - partnerState
 * - partnerUnresponsivenessThresholdInDays
 * - partnerUnsupportedOsVersionBlocked
 * - windowsDeviceBlockedOnMissingPartnerData
 * - windowsEnabled
 */
class MobileThreatDefenseConnectorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileThreatDefenseConnector
     */
    public const FIELD_ALLOW_PARTNER_TO_COLLECT_IOSAPPLICATION_METADATA = 'allowPartnerToCollectIOSApplicationMetadata';
    public const FIELD_ALLOW_PARTNER_TO_COLLECT_IOSPERSONAL_APPLICATION_METADATA = 'allowPartnerToCollectIOSPersonalApplicationMetadata';
    public const FIELD_ANDROID_DEVICE_BLOCKED_ON_MISSING_PARTNER_DATA = 'androidDeviceBlockedOnMissingPartnerData';
    public const FIELD_ANDROID_ENABLED = 'androidEnabled';
    public const FIELD_ANDROID_MOBILE_APPLICATION_MANAGEMENT_ENABLED = 'androidMobileApplicationManagementEnabled';
    public const FIELD_IOS_DEVICE_BLOCKED_ON_MISSING_PARTNER_DATA = 'iosDeviceBlockedOnMissingPartnerData';
    public const FIELD_IOS_ENABLED = 'iosEnabled';
    public const FIELD_IOS_MOBILE_APPLICATION_MANAGEMENT_ENABLED = 'iosMobileApplicationManagementEnabled';
    public const FIELD_LAST_HEARTBEAT_DATE_TIME = 'lastHeartbeatDateTime';
    public const FIELD_MICROSOFT_DEFENDER_FOR_ENDPOINT_ATTACH_ENABLED = 'microsoftDefenderForEndpointAttachEnabled';
    public const FIELD_PARTNER_STATE = 'partnerState';
    public const FIELD_PARTNER_UNRESPONSIVENESS_THRESHOLD_IN_DAYS = 'partnerUnresponsivenessThresholdInDays';
    public const FIELD_PARTNER_UNSUPPORTED_OS_VERSION_BLOCKED = 'partnerUnsupportedOsVersionBlocked';
    public const FIELD_WINDOWS_DEVICE_BLOCKED_ON_MISSING_PARTNER_DATA = 'windowsDeviceBlockedOnMissingPartnerData';
    public const FIELD_WINDOWS_ENABLED = 'windowsEnabled';

    /**
     * Select specific MobileThreatDefenseConnector properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

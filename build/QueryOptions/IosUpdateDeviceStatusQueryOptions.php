<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosUpdateDeviceStatus resources
 *
 * Available select fields:
 * - complianceGracePeriodExpirationDateTime
 * - deviceDisplayName
 * - deviceId
 * - deviceModel
 * - installStatus
 * - lastReportedDateTime
 * - osVersion
 * - status
 * - userId
 * - userName
 * - userPrincipalName
 */
class IosUpdateDeviceStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosUpdateDeviceStatus
     */
    public const FIELD_COMPLIANCE_GRACE_PERIOD_EXPIRATION_DATE_TIME = 'complianceGracePeriodExpirationDateTime';
    public const FIELD_DEVICE_DISPLAY_NAME = 'deviceDisplayName';
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_DEVICE_MODEL = 'deviceModel';
    public const FIELD_INSTALL_STATUS = 'installStatus';
    public const FIELD_LAST_REPORTED_DATE_TIME = 'lastReportedDateTime';
    public const FIELD_OS_VERSION = 'osVersion';
    public const FIELD_STATUS = 'status';
    public const FIELD_USER_ID = 'userId';
    public const FIELD_USER_NAME = 'userName';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific IosUpdateDeviceStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceComplianceDeviceStatus resources
 *
 * Available select fields:
 * - complianceGracePeriodExpirationDateTime
 * - deviceDisplayName
 * - deviceModel
 * - lastReportedDateTime
 * - status
 * - userName
 * - userPrincipalName
 */
class DeviceComplianceDeviceStatusQueryOptions extends QueryOptions
{
    public const FIELD_COMPLIANCE_GRACE_PERIOD_EXPIRATION_DATE_TIME = 'complianceGracePeriodExpirationDateTime';
    public const FIELD_DEVICE_DISPLAY_NAME = 'deviceDisplayName';
    public const FIELD_DEVICE_MODEL = 'deviceModel';
    public const FIELD_LAST_REPORTED_DATE_TIME = 'lastReportedDateTime';
    public const FIELD_STATUS = 'status';
    public const FIELD_USER_NAME = 'userName';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific DeviceComplianceDeviceStatus properties
     * 
     * @param array<string> $select Use DeviceComplianceDeviceStatusQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

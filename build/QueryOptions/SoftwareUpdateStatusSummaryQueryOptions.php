<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SoftwareUpdateStatusSummary resources
 *
 * Available select fields:
 * - compliantDeviceCount
 * - compliantUserCount
 * - conflictDeviceCount
 * - conflictUserCount
 * - displayName
 * - errorDeviceCount
 * - errorUserCount
 * - nonCompliantDeviceCount
 * - nonCompliantUserCount
 * - notApplicableDeviceCount
 * - notApplicableUserCount
 * - remediatedDeviceCount
 * - remediatedUserCount
 * - unknownDeviceCount
 * - unknownUserCount
 */
class SoftwareUpdateStatusSummaryQueryOptions extends QueryOptions
{
    public const FIELD_COMPLIANT_DEVICE_COUNT = 'compliantDeviceCount';
    public const FIELD_COMPLIANT_USER_COUNT = 'compliantUserCount';
    public const FIELD_CONFLICT_DEVICE_COUNT = 'conflictDeviceCount';
    public const FIELD_CONFLICT_USER_COUNT = 'conflictUserCount';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ERROR_DEVICE_COUNT = 'errorDeviceCount';
    public const FIELD_ERROR_USER_COUNT = 'errorUserCount';
    public const FIELD_NON_COMPLIANT_DEVICE_COUNT = 'nonCompliantDeviceCount';
    public const FIELD_NON_COMPLIANT_USER_COUNT = 'nonCompliantUserCount';
    public const FIELD_NOT_APPLICABLE_DEVICE_COUNT = 'notApplicableDeviceCount';
    public const FIELD_NOT_APPLICABLE_USER_COUNT = 'notApplicableUserCount';
    public const FIELD_REMEDIATED_DEVICE_COUNT = 'remediatedDeviceCount';
    public const FIELD_REMEDIATED_USER_COUNT = 'remediatedUserCount';
    public const FIELD_UNKNOWN_DEVICE_COUNT = 'unknownDeviceCount';
    public const FIELD_UNKNOWN_USER_COUNT = 'unknownUserCount';

    /**
     * Select specific SoftwareUpdateStatusSummary properties
     * 
     * @param array<string> $select Use SoftwareUpdateStatusSummaryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCompliancePolicyDeviceStateSummary resources
 *
 * Available select fields:
 * - compliantDeviceCount
 * - configManagerCount
 * - conflictDeviceCount
 * - errorDeviceCount
 * - inGracePeriodCount
 * - nonCompliantDeviceCount
 * - notApplicableDeviceCount
 * - remediatedDeviceCount
 * - unknownDeviceCount
 */
class DeviceCompliancePolicyDeviceStateSummaryQueryOptions extends QueryOptions
{
    public const FIELD_COMPLIANT_DEVICE_COUNT = 'compliantDeviceCount';
    public const FIELD_CONFIG_MANAGER_COUNT = 'configManagerCount';
    public const FIELD_CONFLICT_DEVICE_COUNT = 'conflictDeviceCount';
    public const FIELD_ERROR_DEVICE_COUNT = 'errorDeviceCount';
    public const FIELD_IN_GRACE_PERIOD_COUNT = 'inGracePeriodCount';
    public const FIELD_NON_COMPLIANT_DEVICE_COUNT = 'nonCompliantDeviceCount';
    public const FIELD_NOT_APPLICABLE_DEVICE_COUNT = 'notApplicableDeviceCount';
    public const FIELD_REMEDIATED_DEVICE_COUNT = 'remediatedDeviceCount';
    public const FIELD_UNKNOWN_DEVICE_COUNT = 'unknownDeviceCount';

    /**
     * Select specific DeviceCompliancePolicyDeviceStateSummary properties
     * 
     * @param array<string> $select Use DeviceCompliancePolicyDeviceStateSummaryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

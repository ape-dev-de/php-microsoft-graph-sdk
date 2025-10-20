<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCompliancePolicySettingStateSummary resources
 *
 * Available select fields:
 * - compliantDeviceCount
 * - conflictDeviceCount
 * - errorDeviceCount
 * - nonCompliantDeviceCount
 * - notApplicableDeviceCount
 * - platformType
 * - remediatedDeviceCount
 * - setting
 * - settingName
 * - unknownDeviceCount
 * - deviceComplianceSettingStates
 */
class DeviceCompliancePolicySettingStateSummaryQueryOptions extends QueryOptions
{
    public const FIELD_COMPLIANT_DEVICE_COUNT = 'compliantDeviceCount';
    public const FIELD_CONFLICT_DEVICE_COUNT = 'conflictDeviceCount';
    public const FIELD_ERROR_DEVICE_COUNT = 'errorDeviceCount';
    public const FIELD_NON_COMPLIANT_DEVICE_COUNT = 'nonCompliantDeviceCount';
    public const FIELD_NOT_APPLICABLE_DEVICE_COUNT = 'notApplicableDeviceCount';
    public const FIELD_PLATFORM_TYPE = 'platformType';
    public const FIELD_REMEDIATED_DEVICE_COUNT = 'remediatedDeviceCount';
    public const FIELD_SETTING = 'setting';
    public const FIELD_SETTING_NAME = 'settingName';
    public const FIELD_UNKNOWN_DEVICE_COUNT = 'unknownDeviceCount';
    public const FIELD_DEVICE_COMPLIANCE_SETTING_STATES = 'deviceComplianceSettingStates';

    /**
     * Select specific DeviceCompliancePolicySettingStateSummary properties
     * 
     * @param array<string> $select Use DeviceCompliancePolicySettingStateSummaryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SettingStateDeviceSummary resources
 *
 * Available select fields:
 * - compliantDeviceCount
 * - conflictDeviceCount
 * - errorDeviceCount
 * - instancePath
 * - nonCompliantDeviceCount
 * - notApplicableDeviceCount
 * - remediatedDeviceCount
 * - settingName
 * - unknownDeviceCount
 */
class SettingStateDeviceSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SettingStateDeviceSummary
     */
    public const FIELD_COMPLIANT_DEVICE_COUNT = 'compliantDeviceCount';
    public const FIELD_CONFLICT_DEVICE_COUNT = 'conflictDeviceCount';
    public const FIELD_ERROR_DEVICE_COUNT = 'errorDeviceCount';
    public const FIELD_INSTANCE_PATH = 'instancePath';
    public const FIELD_NON_COMPLIANT_DEVICE_COUNT = 'nonCompliantDeviceCount';
    public const FIELD_NOT_APPLICABLE_DEVICE_COUNT = 'notApplicableDeviceCount';
    public const FIELD_REMEDIATED_DEVICE_COUNT = 'remediatedDeviceCount';
    public const FIELD_SETTING_NAME = 'settingName';
    public const FIELD_UNKNOWN_DEVICE_COUNT = 'unknownDeviceCount';

    /**
     * Select specific SettingStateDeviceSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

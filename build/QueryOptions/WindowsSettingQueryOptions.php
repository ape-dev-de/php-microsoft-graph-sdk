<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsSetting resources
 *
 * Available select fields:
 * - payloadType
 * - settingType
 * - windowsDeviceId
 * - instances
 */
class WindowsSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsSetting
     */
    public const FIELD_PAYLOAD_TYPE = 'payloadType';
    public const FIELD_SETTING_TYPE = 'settingType';
    public const FIELD_WINDOWS_DEVICE_ID = 'windowsDeviceId';
    public const FIELD_INSTANCES = 'instances';

    /**
     * Select specific WindowsSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCompliancePolicyState resources
 *
 * Available select fields:
 * - displayName
 * - platformType
 * - settingCount
 * - settingStates
 * - state
 * - version
 */
class DeviceCompliancePolicyStateQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_PLATFORM_TYPE = 'platformType';
    public const FIELD_SETTING_COUNT = 'settingCount';
    public const FIELD_SETTING_STATES = 'settingStates';
    public const FIELD_STATE = 'state';
    public const FIELD_VERSION = 'version';

    /**
     * Select specific DeviceCompliancePolicyState properties
     * 
     * @param array<string> $select Use DeviceCompliancePolicyStateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

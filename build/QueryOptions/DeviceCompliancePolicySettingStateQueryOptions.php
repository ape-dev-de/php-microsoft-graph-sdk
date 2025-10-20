<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCompliancePolicySettingState resources
 *
 * Available select fields:
 * - currentValue
 * - errorCode
 * - errorDescription
 * - instanceDisplayName
 * - setting
 * - settingName
 * - sources
 * - state
 * - userEmail
 * - userId
 * - userName
 * - userPrincipalName
 */
class DeviceCompliancePolicySettingStateQueryOptions extends QueryOptions
{
    public const FIELD_CURRENT_VALUE = 'currentValue';
    public const FIELD_ERROR_CODE = 'errorCode';
    public const FIELD_ERROR_DESCRIPTION = 'errorDescription';
    public const FIELD_INSTANCE_DISPLAY_NAME = 'instanceDisplayName';
    public const FIELD_SETTING = 'setting';
    public const FIELD_SETTING_NAME = 'settingName';
    public const FIELD_SOURCES = 'sources';
    public const FIELD_STATE = 'state';
    public const FIELD_USER_EMAIL = 'userEmail';
    public const FIELD_USER_ID = 'userId';
    public const FIELD_USER_NAME = 'userName';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific DeviceCompliancePolicySettingState properties
     * 
     * @param array<string> $select Use DeviceCompliancePolicySettingStateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

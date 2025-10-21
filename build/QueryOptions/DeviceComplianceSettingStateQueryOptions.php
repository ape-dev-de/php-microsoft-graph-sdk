<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceComplianceSettingState resources
 *
 * Available select fields:
 * - complianceGracePeriodExpirationDateTime
 * - deviceId
 * - deviceModel
 * - deviceName
 * - setting
 * - settingName
 * - state
 * - userEmail
 * - userId
 * - userName
 * - userPrincipalName
 */
class DeviceComplianceSettingStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceComplianceSettingState
     */
    public const FIELD_COMPLIANCE_GRACE_PERIOD_EXPIRATION_DATE_TIME = 'complianceGracePeriodExpirationDateTime';
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_DEVICE_MODEL = 'deviceModel';
    public const FIELD_DEVICE_NAME = 'deviceName';
    public const FIELD_SETTING = 'setting';
    public const FIELD_SETTING_NAME = 'settingName';
    public const FIELD_STATE = 'state';
    public const FIELD_USER_EMAIL = 'userEmail';
    public const FIELD_USER_ID = 'userId';
    public const FIELD_USER_NAME = 'userName';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific DeviceComplianceSettingState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

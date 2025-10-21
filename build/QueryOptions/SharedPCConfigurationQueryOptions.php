<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharedPCConfiguration resources
 *
 * Available select fields:
 * - accountManagerPolicy
 * - allowedAccounts
 * - allowLocalStorage
 * - disableAccountManager
 * - disableEduPolicies
 * - disablePowerPolicies
 * - disableSignInOnResume
 * - enabled
 * - idleTimeBeforeSleepInSeconds
 * - kioskAppDisplayName
 * - kioskAppUserModelId
 * - maintenanceStartTime
 */
class SharedPCConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharedPCConfiguration
     */
    public const FIELD_ACCOUNT_MANAGER_POLICY = 'accountManagerPolicy';
    public const FIELD_ALLOWED_ACCOUNTS = 'allowedAccounts';
    public const FIELD_ALLOW_LOCAL_STORAGE = 'allowLocalStorage';
    public const FIELD_DISABLE_ACCOUNT_MANAGER = 'disableAccountManager';
    public const FIELD_DISABLE_EDU_POLICIES = 'disableEduPolicies';
    public const FIELD_DISABLE_POWER_POLICIES = 'disablePowerPolicies';
    public const FIELD_DISABLE_SIGN_IN_ON_RESUME = 'disableSignInOnResume';
    public const FIELD_ENABLED = 'enabled';
    public const FIELD_IDLE_TIME_BEFORE_SLEEP_IN_SECONDS = 'idleTimeBeforeSleepInSeconds';
    public const FIELD_KIOSK_APP_DISPLAY_NAME = 'kioskAppDisplayName';
    public const FIELD_KIOSK_APP_USER_MODEL_ID = 'kioskAppUserModelId';
    public const FIELD_MAINTENANCE_START_TIME = 'maintenanceStartTime';

    /**
     * Select specific SharedPCConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

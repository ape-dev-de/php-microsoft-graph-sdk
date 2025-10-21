<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UpdateWindowsDeviceAccountActionParameter resources
 *
 * Available select fields:
 * - calendarSyncEnabled
 * - deviceAccount
 * - deviceAccountEmail
 * - exchangeServer
 * - passwordRotationEnabled
 * - sessionInitiationProtocalAddress
 */
class UpdateWindowsDeviceAccountActionParameterQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UpdateWindowsDeviceAccountActionParameter
     */
    public const FIELD_CALENDAR_SYNC_ENABLED = 'calendarSyncEnabled';
    public const FIELD_DEVICE_ACCOUNT = 'deviceAccount';
    public const FIELD_DEVICE_ACCOUNT_EMAIL = 'deviceAccountEmail';
    public const FIELD_EXCHANGE_SERVER = 'exchangeServer';
    public const FIELD_PASSWORD_ROTATION_ENABLED = 'passwordRotationEnabled';
    public const FIELD_SESSION_INITIATION_PROTOCAL_ADDRESS = 'sessionInitiationProtocalAddress';

    /**
     * Select specific UpdateWindowsDeviceAccountActionParameter properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

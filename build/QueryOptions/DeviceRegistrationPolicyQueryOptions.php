<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceRegistrationPolicy resources
 *
 * Available select fields:
 * - azureADJoin
 * - azureADRegistration
 * - description
 * - displayName
 * - localAdminPassword
 * - multiFactorAuthConfiguration
 * - userDeviceQuota
 */
class DeviceRegistrationPolicyQueryOptions extends QueryOptions
{
    public const FIELD_AZURE_ADJOIN = 'azureADJoin';
    public const FIELD_AZURE_ADREGISTRATION = 'azureADRegistration';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LOCAL_ADMIN_PASSWORD = 'localAdminPassword';
    public const FIELD_MULTI_FACTOR_AUTH_CONFIGURATION = 'multiFactorAuthConfiguration';
    public const FIELD_USER_DEVICE_QUOTA = 'userDeviceQuota';

    /**
     * Select specific DeviceRegistrationPolicy properties
     * 
     * @param array<string> $select Use DeviceRegistrationPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

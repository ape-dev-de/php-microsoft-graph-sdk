<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPC resources
 *
 * Available select fields:
 * - aadDeviceId
 * - displayName
 * - gracePeriodEndDateTime
 * - imageDisplayName
 * - lastModifiedDateTime
 * - managedDeviceId
 * - managedDeviceName
 * - onPremisesConnectionName
 * - provisioningPolicyId
 * - provisioningPolicyName
 * - provisioningType
 * - servicePlanId
 * - servicePlanName
 * - userPrincipalName
 */
class CloudPCQueryOptions extends QueryOptions
{
    public const FIELD_AAD_DEVICE_ID = 'aadDeviceId';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_GRACE_PERIOD_END_DATE_TIME = 'gracePeriodEndDateTime';
    public const FIELD_IMAGE_DISPLAY_NAME = 'imageDisplayName';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_MANAGED_DEVICE_ID = 'managedDeviceId';
    public const FIELD_MANAGED_DEVICE_NAME = 'managedDeviceName';
    public const FIELD_ON_PREMISES_CONNECTION_NAME = 'onPremisesConnectionName';
    public const FIELD_PROVISIONING_POLICY_ID = 'provisioningPolicyId';
    public const FIELD_PROVISIONING_POLICY_NAME = 'provisioningPolicyName';
    public const FIELD_PROVISIONING_TYPE = 'provisioningType';
    public const FIELD_SERVICE_PLAN_ID = 'servicePlanId';
    public const FIELD_SERVICE_PLAN_NAME = 'servicePlanName';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific CloudPC properties
     * 
     * @param array<string> $select Use CloudPCQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

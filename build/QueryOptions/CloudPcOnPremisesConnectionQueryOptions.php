<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcOnPremisesConnection resources
 *
 * Available select fields:
 * - adDomainName
 * - adDomainPassword
 * - adDomainUsername
 * - alternateResourceUrl
 * - connectionType
 * - displayName
 * - healthCheckStatus
 * - healthCheckStatusDetail
 * - inUse
 * - organizationalUnit
 * - resourceGroupId
 * - subnetId
 * - subscriptionId
 * - subscriptionName
 * - virtualNetworkId
 * - virtualNetworkLocation
 */
class CloudPcOnPremisesConnectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcOnPremisesConnection
     */
    public const FIELD_AD_DOMAIN_NAME = 'adDomainName';
    public const FIELD_AD_DOMAIN_PASSWORD = 'adDomainPassword';
    public const FIELD_AD_DOMAIN_USERNAME = 'adDomainUsername';
    public const FIELD_ALTERNATE_RESOURCE_URL = 'alternateResourceUrl';
    public const FIELD_CONNECTION_TYPE = 'connectionType';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_HEALTH_CHECK_STATUS = 'healthCheckStatus';
    public const FIELD_HEALTH_CHECK_STATUS_DETAIL = 'healthCheckStatusDetail';
    public const FIELD_IN_USE = 'inUse';
    public const FIELD_ORGANIZATIONAL_UNIT = 'organizationalUnit';
    public const FIELD_RESOURCE_GROUP_ID = 'resourceGroupId';
    public const FIELD_SUBNET_ID = 'subnetId';
    public const FIELD_SUBSCRIPTION_ID = 'subscriptionId';
    public const FIELD_SUBSCRIPTION_NAME = 'subscriptionName';
    public const FIELD_VIRTUAL_NETWORK_ID = 'virtualNetworkId';
    public const FIELD_VIRTUAL_NETWORK_LOCATION = 'virtualNetworkLocation';

    /**
     * Select specific CloudPcOnPremisesConnection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

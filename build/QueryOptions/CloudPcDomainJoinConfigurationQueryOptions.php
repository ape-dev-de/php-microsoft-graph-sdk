<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcDomainJoinConfiguration resources
 *
 * Available select fields:
 * - domainJoinType
 * - onPremisesConnectionId
 * - regionGroup
 * - regionName
 */
class CloudPcDomainJoinConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_DOMAIN_JOIN_TYPE = 'domainJoinType';
    public const FIELD_ON_PREMISES_CONNECTION_ID = 'onPremisesConnectionId';
    public const FIELD_REGION_GROUP = 'regionGroup';
    public const FIELD_REGION_NAME = 'regionName';

    /**
     * Select specific CloudPcDomainJoinConfiguration properties
     * 
     * @param array<string> $select Use CloudPcDomainJoinConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

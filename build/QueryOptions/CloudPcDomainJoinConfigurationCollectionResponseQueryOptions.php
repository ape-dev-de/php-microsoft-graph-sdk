<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcDomainJoinConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CloudPcDomainJoinConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CloudPcDomainJoinConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use CloudPcDomainJoinConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

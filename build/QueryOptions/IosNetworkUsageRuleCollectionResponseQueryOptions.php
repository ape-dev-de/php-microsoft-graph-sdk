<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosNetworkUsageRuleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosNetworkUsageRuleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosNetworkUsageRuleCollectionResponse properties
     * 
     * @param array<string> $select Use IosNetworkUsageRuleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

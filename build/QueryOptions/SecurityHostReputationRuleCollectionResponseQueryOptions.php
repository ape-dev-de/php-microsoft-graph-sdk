<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostReputationRuleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityHostReputationRuleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityHostReputationRuleCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityHostReputationRuleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

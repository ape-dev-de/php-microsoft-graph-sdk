<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ConditionalAccessPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ConditionalAccessPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use ConditionalAccessPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

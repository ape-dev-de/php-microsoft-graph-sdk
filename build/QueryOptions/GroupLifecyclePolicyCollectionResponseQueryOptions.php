<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupLifecyclePolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class GroupLifecyclePolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific GroupLifecyclePolicyCollectionResponse properties
     * 
     * @param array<string> $select Use GroupLifecyclePolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ClaimsMappingPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ClaimsMappingPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ClaimsMappingPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use ClaimsMappingPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

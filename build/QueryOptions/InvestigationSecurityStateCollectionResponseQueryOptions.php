<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InvestigationSecurityStateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class InvestigationSecurityStateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific InvestigationSecurityStateCollectionResponse properties
     * 
     * @param array<string> $select Use InvestigationSecurityStateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

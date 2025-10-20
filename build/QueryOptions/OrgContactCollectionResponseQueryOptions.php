<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OrgContactCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OrgContactCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OrgContactCollectionResponse properties
     * 
     * @param array<string> $select Use OrgContactCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

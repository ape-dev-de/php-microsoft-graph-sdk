<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SectionGroupCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SectionGroupCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SectionGroupCollectionResponse properties
     * 
     * @param array<string> $select Use SectionGroupCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

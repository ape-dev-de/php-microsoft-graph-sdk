<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for HorizontalSectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class HorizontalSectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific HorizontalSectionCollectionResponse properties
     * 
     * @param array<string> $select Use HorizontalSectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

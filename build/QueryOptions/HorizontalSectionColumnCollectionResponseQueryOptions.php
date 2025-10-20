<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for HorizontalSectionColumnCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class HorizontalSectionColumnCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific HorizontalSectionColumnCollectionResponse properties
     * 
     * @param array<string> $select Use HorizontalSectionColumnCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

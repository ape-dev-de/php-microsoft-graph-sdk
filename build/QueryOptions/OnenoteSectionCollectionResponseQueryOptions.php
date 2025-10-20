<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenoteSectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OnenoteSectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnenoteSectionCollectionResponse properties
     * 
     * @param array<string> $select Use OnenoteSectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

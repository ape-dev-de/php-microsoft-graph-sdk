<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharingDetailCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SharingDetailCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SharingDetailCollectionResponse properties
     * 
     * @param array<string> $select Use SharingDetailCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

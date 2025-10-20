<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CountryNamedLocationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CountryNamedLocationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CountryNamedLocationCollectionResponse properties
     * 
     * @param array<string> $select Use CountryNamedLocationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosVppEBookCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosVppEBookCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosVppEBookCollectionResponse properties
     * 
     * @param array<string> $select Use IosVppEBookCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

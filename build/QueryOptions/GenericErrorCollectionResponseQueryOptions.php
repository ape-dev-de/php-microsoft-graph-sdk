<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GenericErrorCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class GenericErrorCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific GenericErrorCollectionResponse properties
     * 
     * @param array<string> $select Use GenericErrorCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

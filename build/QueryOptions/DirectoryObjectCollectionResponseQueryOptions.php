<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryObjectCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DirectoryObjectCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DirectoryObjectCollectionResponse properties
     * 
     * @param array<string> $select Use DirectoryObjectCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

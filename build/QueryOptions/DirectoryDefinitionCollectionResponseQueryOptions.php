<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryDefinitionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DirectoryDefinitionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DirectoryDefinitionCollectionResponse properties
     * 
     * @param array<string> $select Use DirectoryDefinitionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

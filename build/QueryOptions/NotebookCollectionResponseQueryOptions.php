<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NotebookCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class NotebookCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific NotebookCollectionResponse properties
     * 
     * @param array<string> $select Use NotebookCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

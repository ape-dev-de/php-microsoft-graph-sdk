<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintDocumentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PrintDocumentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PrintDocumentCollectionResponse properties
     * 
     * @param array<string> $select Use PrintDocumentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

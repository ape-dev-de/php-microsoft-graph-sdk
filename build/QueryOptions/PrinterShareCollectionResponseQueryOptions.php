<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterShareCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PrinterShareCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PrinterShareCollectionResponse properties
     * 
     * @param array<string> $select Use PrinterShareCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

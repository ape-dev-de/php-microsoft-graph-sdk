<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterCreateOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PrinterCreateOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PrinterCreateOperationCollectionResponse properties
     * 
     * @param array<string> $select Use PrinterCreateOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

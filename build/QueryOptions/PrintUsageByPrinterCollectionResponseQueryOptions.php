<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintUsageByPrinterCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PrintUsageByPrinterCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PrintUsageByPrinterCollectionResponse properties
     * 
     * @param array<string> $select Use PrintUsageByPrinterCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

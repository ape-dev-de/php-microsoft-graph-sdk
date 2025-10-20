<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintUsageByUserCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PrintUsageByUserCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PrintUsageByUserCollectionResponse properties
     * 
     * @param array<string> $select Use PrintUsageByUserCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

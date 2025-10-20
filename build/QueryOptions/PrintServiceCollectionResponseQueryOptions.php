<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintServiceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PrintServiceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PrintServiceCollectionResponse properties
     * 
     * @param array<string> $select Use PrintServiceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

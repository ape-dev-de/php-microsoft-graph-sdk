<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintTaskDefinitionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PrintTaskDefinitionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PrintTaskDefinitionCollectionResponse properties
     * 
     * @param array<string> $select Use PrintTaskDefinitionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

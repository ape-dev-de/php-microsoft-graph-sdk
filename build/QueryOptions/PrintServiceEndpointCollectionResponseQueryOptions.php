<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintServiceEndpointCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PrintServiceEndpointCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PrintServiceEndpointCollectionResponse properties
     * 
     * @param array<string> $select Use PrintServiceEndpointCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FilterOperatorSchemaCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class FilterOperatorSchemaCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific FilterOperatorSchemaCollectionResponse properties
     * 
     * @param array<string> $select Use FilterOperatorSchemaCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

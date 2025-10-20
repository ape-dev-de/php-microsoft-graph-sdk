<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SchemaExtensionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SchemaExtensionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SchemaExtensionCollectionResponse properties
     * 
     * @param array<string> $select Use SchemaExtensionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

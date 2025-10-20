<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySinglePropertySchemaCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecuritySinglePropertySchemaCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecuritySinglePropertySchemaCollectionResponse properties
     * 
     * @param array<string> $select Use SecuritySinglePropertySchemaCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

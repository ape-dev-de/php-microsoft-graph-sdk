<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomSecurityAttributeDefinitionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CustomSecurityAttributeDefinitionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CustomSecurityAttributeDefinitionCollectionResponse properties
     * 
     * @param array<string> $select Use CustomSecurityAttributeDefinitionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

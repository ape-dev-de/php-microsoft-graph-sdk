<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationAttributeCollectionOptionConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AuthenticationAttributeCollectionOptionConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuthenticationAttributeCollectionOptionConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use AuthenticationAttributeCollectionOptionConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

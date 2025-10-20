<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationAttributeCollectionInputConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AuthenticationAttributeCollectionInputConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuthenticationAttributeCollectionInputConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use AuthenticationAttributeCollectionInputConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

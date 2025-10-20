<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationCombinationConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AuthenticationCombinationConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuthenticationCombinationConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use AuthenticationCombinationConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

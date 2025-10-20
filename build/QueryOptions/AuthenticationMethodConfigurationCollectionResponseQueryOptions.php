<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AuthenticationMethodConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuthenticationMethodConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use AuthenticationMethodConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TemporaryAccessPassAuthenticationMethodConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TemporaryAccessPassAuthenticationMethodConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TemporaryAccessPassAuthenticationMethodConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use TemporaryAccessPassAuthenticationMethodConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

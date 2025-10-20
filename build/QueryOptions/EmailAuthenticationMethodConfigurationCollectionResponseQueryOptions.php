<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmailAuthenticationMethodConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EmailAuthenticationMethodConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EmailAuthenticationMethodConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use EmailAuthenticationMethodConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

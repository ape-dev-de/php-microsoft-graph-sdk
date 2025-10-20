<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Fido2AuthenticationMethodConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class Fido2AuthenticationMethodConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific Fido2AuthenticationMethodConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use Fido2AuthenticationMethodConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

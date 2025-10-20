<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomAuthenticationExtensionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CustomAuthenticationExtensionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CustomAuthenticationExtensionCollectionResponse properties
     * 
     * @param array<string> $select Use CustomAuthenticationExtensionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityProviderBaseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityProviderBaseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityProviderBaseCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityProviderBaseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

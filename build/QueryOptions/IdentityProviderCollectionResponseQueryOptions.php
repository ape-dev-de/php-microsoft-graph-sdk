<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityProviderCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityProviderCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityProviderCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityProviderCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

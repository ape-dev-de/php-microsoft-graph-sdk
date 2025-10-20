<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppleManagedIdentityProviderCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AppleManagedIdentityProviderCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AppleManagedIdentityProviderCollectionResponse properties
     * 
     * @param array<string> $select Use AppleManagedIdentityProviderCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

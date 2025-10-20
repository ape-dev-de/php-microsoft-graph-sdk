<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BuiltInIdentityProvider resources
 *
 * Available select fields:
 * - identityProviderType
 */
class BuiltInIdentityProviderQueryOptions extends QueryOptions
{
    public const FIELD_IDENTITY_PROVIDER_TYPE = 'identityProviderType';

    /**
     * Select specific BuiltInIdentityProvider properties
     * 
     * @param array<string> $select Use BuiltInIdentityProviderQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

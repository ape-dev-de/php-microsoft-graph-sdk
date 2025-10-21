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
    /**
     * Available select fields for BuiltInIdentityProvider
     */
    public const FIELD_IDENTITY_PROVIDER_TYPE = 'identityProviderType';

    /**
     * Select specific BuiltInIdentityProvider properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

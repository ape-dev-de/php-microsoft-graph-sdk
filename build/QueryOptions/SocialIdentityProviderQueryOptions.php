<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SocialIdentityProvider resources
 *
 * Available select fields:
 * - clientId
 * - clientSecret
 * - identityProviderType
 */
class SocialIdentityProviderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SocialIdentityProvider
     */
    public const FIELD_CLIENT_ID = 'clientId';
    public const FIELD_CLIENT_SECRET = 'clientSecret';
    public const FIELD_IDENTITY_PROVIDER_TYPE = 'identityProviderType';

    /**
     * Select specific SocialIdentityProvider properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

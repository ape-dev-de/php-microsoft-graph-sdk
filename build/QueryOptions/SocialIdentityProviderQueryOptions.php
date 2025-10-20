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
    public const FIELD_CLIENT_ID = 'clientId';
    public const FIELD_CLIENT_SECRET = 'clientSecret';
    public const FIELD_IDENTITY_PROVIDER_TYPE = 'identityProviderType';

    /**
     * Select specific SocialIdentityProvider properties
     * 
     * @param array<string> $select Use SocialIdentityProviderQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

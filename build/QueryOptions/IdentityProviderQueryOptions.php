<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityProvider resources
 *
 * Available select fields:
 * - clientId
 * - clientSecret
 * - name
 * - type
 */
class IdentityProviderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityProvider
     */
    public const FIELD_CLIENT_ID = 'clientId';
    public const FIELD_CLIENT_SECRET = 'clientSecret';
    public const FIELD_NAME = 'name';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific IdentityProvider properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

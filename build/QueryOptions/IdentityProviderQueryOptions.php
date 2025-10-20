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
    public const FIELD_CLIENT_ID = 'clientId';
    public const FIELD_CLIENT_SECRET = 'clientSecret';
    public const FIELD_NAME = 'name';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific IdentityProvider properties
     * 
     * @param array<string> $select Use IdentityProviderQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

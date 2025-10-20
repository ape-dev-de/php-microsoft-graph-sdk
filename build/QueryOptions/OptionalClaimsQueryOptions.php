<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OptionalClaims resources
 *
 * Available select fields:
 * - accessToken
 * - idToken
 * - saml2Token
 */
class OptionalClaimsQueryOptions extends QueryOptions
{
    public const FIELD_ACCESS_TOKEN = 'accessToken';
    public const FIELD_ID_TOKEN = 'idToken';
    public const FIELD_SAML2TOKEN = 'saml2Token';

    /**
     * Select specific OptionalClaims properties
     * 
     * @param array<string> $select Use OptionalClaimsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

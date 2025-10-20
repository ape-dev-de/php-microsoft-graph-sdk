<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ImplicitGrantSettings resources
 *
 * Available select fields:
 * - enableAccessTokenIssuance
 * - enableIdTokenIssuance
 */
class ImplicitGrantSettingsQueryOptions extends QueryOptions
{
    public const FIELD_ENABLE_ACCESS_TOKEN_ISSUANCE = 'enableAccessTokenIssuance';
    public const FIELD_ENABLE_ID_TOKEN_ISSUANCE = 'enableIdTokenIssuance';

    /**
     * Select specific ImplicitGrantSettings properties
     * 
     * @param array<string> $select Use ImplicitGrantSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OAuthConsentAppDetail resources
 *
 * Available select fields:
 * - appScope
 * - displayLogo
 * - displayName
 */
class OAuthConsentAppDetailQueryOptions extends QueryOptions
{
    public const FIELD_APP_SCOPE = 'appScope';
    public const FIELD_DISPLAY_LOGO = 'displayLogo';
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific OAuthConsentAppDetail properties
     * 
     * @param array<string> $select Use OAuthConsentAppDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

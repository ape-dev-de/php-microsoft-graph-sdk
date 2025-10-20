<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WebApplication resources
 *
 * Available select fields:
 * - homePageUrl
 * - implicitGrantSettings
 * - logoutUrl
 * - redirectUris
 * - redirectUriSettings
 */
class WebApplicationQueryOptions extends QueryOptions
{
    public const FIELD_HOME_PAGE_URL = 'homePageUrl';
    public const FIELD_IMPLICIT_GRANT_SETTINGS = 'implicitGrantSettings';
    public const FIELD_LOGOUT_URL = 'logoutUrl';
    public const FIELD_REDIRECT_URIS = 'redirectUris';
    public const FIELD_REDIRECT_URI_SETTINGS = 'redirectUriSettings';

    /**
     * Select specific WebApplication properties
     * 
     * @param array<string> $select Use WebApplicationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

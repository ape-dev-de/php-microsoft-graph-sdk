<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityUserSource resources
 *
 * Available select fields:
 * - email
 * - includedSources
 * - siteWebUrl
 */
class SecurityUserSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityUserSource
     */
    public const FIELD_EMAIL = 'email';
    public const FIELD_INCLUDED_SOURCES = 'includedSources';
    public const FIELD_SITE_WEB_URL = 'siteWebUrl';

    /**
     * Select specific SecurityUserSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

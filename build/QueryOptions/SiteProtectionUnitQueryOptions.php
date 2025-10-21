<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SiteProtectionUnit resources
 *
 * Available select fields:
 * - siteId
 * - siteName
 * - siteWebUrl
 */
class SiteProtectionUnitQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SiteProtectionUnit
     */
    public const FIELD_SITE_ID = 'siteId';
    public const FIELD_SITE_NAME = 'siteName';
    public const FIELD_SITE_WEB_URL = 'siteWebUrl';

    /**
     * Select specific SiteProtectionUnit properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

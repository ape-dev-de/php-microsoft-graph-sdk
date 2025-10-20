<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSiteList resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - publishedBy
 * - publishedDateTime
 * - revision
 * - status
 * - sharedCookies
 * - sites
 */
class BrowserSiteListQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_PUBLISHED_BY = 'publishedBy';
    public const FIELD_PUBLISHED_DATE_TIME = 'publishedDateTime';
    public const FIELD_REVISION = 'revision';
    public const FIELD_STATUS = 'status';
    public const FIELD_SHARED_COOKIES = 'sharedCookies';
    public const FIELD_SITES = 'sites';

    /**
     * Select specific BrowserSiteList properties
     * 
     * @param array<string> $select Use BrowserSiteListQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

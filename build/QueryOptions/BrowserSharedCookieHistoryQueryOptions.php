<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSharedCookieHistory resources
 *
 * Available select fields:
 * - comment
 * - displayName
 * - hostOnly
 * - hostOrDomain
 * - lastModifiedBy
 * - path
 * - publishedDateTime
 * - sourceEnvironment
 */
class BrowserSharedCookieHistoryQueryOptions extends QueryOptions
{
    public const FIELD_COMMENT = 'comment';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_HOST_ONLY = 'hostOnly';
    public const FIELD_HOST_OR_DOMAIN = 'hostOrDomain';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_PATH = 'path';
    public const FIELD_PUBLISHED_DATE_TIME = 'publishedDateTime';
    public const FIELD_SOURCE_ENVIRONMENT = 'sourceEnvironment';

    /**
     * Select specific BrowserSharedCookieHistory properties
     * 
     * @param array<string> $select Use BrowserSharedCookieHistoryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

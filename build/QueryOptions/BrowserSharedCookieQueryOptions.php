<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSharedCookie resources
 *
 * Available select fields:
 * - comment
 * - createdDateTime
 * - deletedDateTime
 * - displayName
 * - history
 * - hostOnly
 * - hostOrDomain
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - path
 * - sourceEnvironment
 * - status
 */
class BrowserSharedCookieQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BrowserSharedCookie
     */
    public const FIELD_COMMENT = 'comment';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DELETED_DATE_TIME = 'deletedDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_HISTORY = 'history';
    public const FIELD_HOST_ONLY = 'hostOnly';
    public const FIELD_HOST_OR_DOMAIN = 'hostOrDomain';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_PATH = 'path';
    public const FIELD_SOURCE_ENVIRONMENT = 'sourceEnvironment';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific BrowserSharedCookie properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

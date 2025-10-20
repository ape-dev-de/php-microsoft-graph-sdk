<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSite resources
 *
 * Available select fields:
 * - allowRedirect
 * - comment
 * - compatibilityMode
 * - createdDateTime
 * - deletedDateTime
 * - history
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - mergeType
 * - status
 * - targetEnvironment
 * - webUrl
 */
class BrowserSiteQueryOptions extends QueryOptions
{
    public const FIELD_ALLOW_REDIRECT = 'allowRedirect';
    public const FIELD_COMMENT = 'comment';
    public const FIELD_COMPATIBILITY_MODE = 'compatibilityMode';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DELETED_DATE_TIME = 'deletedDateTime';
    public const FIELD_HISTORY = 'history';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_MERGE_TYPE = 'mergeType';
    public const FIELD_STATUS = 'status';
    public const FIELD_TARGET_ENVIRONMENT = 'targetEnvironment';
    public const FIELD_WEB_URL = 'webUrl';

    /**
     * Select specific BrowserSite properties
     * 
     * @param array<string> $select Use BrowserSiteQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

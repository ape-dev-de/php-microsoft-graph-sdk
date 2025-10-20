<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSiteHistory resources
 *
 * Available select fields:
 * - allowRedirect
 * - comment
 * - compatibilityMode
 * - lastModifiedBy
 * - mergeType
 * - publishedDateTime
 * - targetEnvironment
 */
class BrowserSiteHistoryQueryOptions extends QueryOptions
{
    public const FIELD_ALLOW_REDIRECT = 'allowRedirect';
    public const FIELD_COMMENT = 'comment';
    public const FIELD_COMPATIBILITY_MODE = 'compatibilityMode';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_MERGE_TYPE = 'mergeType';
    public const FIELD_PUBLISHED_DATE_TIME = 'publishedDateTime';
    public const FIELD_TARGET_ENVIRONMENT = 'targetEnvironment';

    /**
     * Select specific BrowserSiteHistory properties
     * 
     * @param array<string> $select Use BrowserSiteHistoryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

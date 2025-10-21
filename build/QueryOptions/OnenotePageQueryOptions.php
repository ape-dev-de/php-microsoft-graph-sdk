<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenotePage resources
 *
 * Available select fields:
 * - content
 * - contentUrl
 * - createdByAppId
 * - lastModifiedDateTime
 * - level
 * - links
 * - order
 * - title
 * - userTags
 * - parentNotebook
 * - parentSection
 */
class OnenotePageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenotePage
     */
    public const FIELD_CONTENT = 'content';
    public const FIELD_CONTENT_URL = 'contentUrl';
    public const FIELD_CREATED_BY_APP_ID = 'createdByAppId';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_LEVEL = 'level';
    public const FIELD_LINKS = 'links';
    public const FIELD_ORDER = 'order';
    public const FIELD_TITLE = 'title';
    public const FIELD_USER_TAGS = 'userTags';
    public const FIELD_PARENT_NOTEBOOK = 'parentNotebook';
    public const FIELD_PARENT_SECTION = 'parentSection';

    /**
     * Select specific OnenotePage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

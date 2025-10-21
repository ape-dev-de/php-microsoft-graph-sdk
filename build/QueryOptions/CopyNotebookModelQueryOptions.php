<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CopyNotebookModel resources
 *
 * Available select fields:
 * - createdBy
 * - createdByIdentity
 * - createdTime
 * - id
 * - isDefault
 * - isShared
 * - lastModifiedBy
 * - lastModifiedByIdentity
 * - lastModifiedTime
 * - links
 * - name
 * - sectionGroupsUrl
 * - sectionsUrl
 * - self
 * - userRole
 */
class CopyNotebookModelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CopyNotebookModel
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_BY_IDENTITY = 'createdByIdentity';
    public const FIELD_CREATED_TIME = 'createdTime';
    public const FIELD_ID = 'id';
    public const FIELD_IS_DEFAULT = 'isDefault';
    public const FIELD_IS_SHARED = 'isShared';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_BY_IDENTITY = 'lastModifiedByIdentity';
    public const FIELD_LAST_MODIFIED_TIME = 'lastModifiedTime';
    public const FIELD_LINKS = 'links';
    public const FIELD_NAME = 'name';
    public const FIELD_SECTION_GROUPS_URL = 'sectionGroupsUrl';
    public const FIELD_SECTIONS_URL = 'sectionsUrl';
    public const FIELD_SELF = 'self';
    public const FIELD_USER_ROLE = 'userRole';

    /**
     * Select specific CopyNotebookModel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

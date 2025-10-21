<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationModule resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - description
 * - displayName
 * - isPinned
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - resourcesFolderUrl
 * - status
 * - resources
 */
class EducationModuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationModule
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_PINNED = 'isPinned';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_RESOURCES_FOLDER_URL = 'resourcesFolderUrl';
    public const FIELD_STATUS = 'status';
    public const FIELD_RESOURCES = 'resources';

    /**
     * Select specific EducationModule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

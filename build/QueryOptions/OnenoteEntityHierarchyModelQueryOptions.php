<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenoteEntityHierarchyModel resources
 *
 * Available select fields:
 * - createdBy
 * - displayName
 * - lastModifiedBy
 * - lastModifiedDateTime
 */
class OnenoteEntityHierarchyModelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenoteEntityHierarchyModel
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';

    /**
     * Select specific OnenoteEntityHierarchyModel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

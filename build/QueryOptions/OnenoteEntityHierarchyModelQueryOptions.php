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
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';

    /**
     * Select specific OnenoteEntityHierarchyModel properties
     * 
     * @param array<string> $select Use OnenoteEntityHierarchyModelQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerExternalReference resources
 *
 * Available select fields:
 * - alias
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - previewPriority
 * - type
 */
class PlannerExternalReferenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerExternalReference
     */
    public const FIELD_ALIAS = 'alias';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_PREVIEW_PRIORITY = 'previewPriority';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific PlannerExternalReference properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

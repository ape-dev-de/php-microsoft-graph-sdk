<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerChecklistItem resources
 *
 * Available select fields:
 * - isChecked
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - orderHint
 * - title
 */
class PlannerChecklistItemQueryOptions extends QueryOptions
{
    public const FIELD_IS_CHECKED = 'isChecked';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_ORDER_HINT = 'orderHint';
    public const FIELD_TITLE = 'title';

    /**
     * Select specific PlannerChecklistItem properties
     * 
     * @param array<string> $select Use PlannerChecklistItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

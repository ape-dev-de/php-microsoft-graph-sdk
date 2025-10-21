<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChecklistItem resources
 *
 * Available select fields:
 * - checkedDateTime
 * - createdDateTime
 * - displayName
 * - isChecked
 */
class ChecklistItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChecklistItem
     */
    public const FIELD_CHECKED_DATE_TIME = 'checkedDateTime';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_CHECKED = 'isChecked';

    /**
     * Select specific ChecklistItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

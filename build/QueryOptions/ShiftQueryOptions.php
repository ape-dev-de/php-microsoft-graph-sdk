<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Shift resources
 *
 * Available select fields:
 * - draftShift
 * - isStagedForDeletion
 * - schedulingGroupId
 * - sharedShift
 * - userId
 */
class ShiftQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Shift
     */
    public const FIELD_DRAFT_SHIFT = 'draftShift';
    public const FIELD_IS_STAGED_FOR_DELETION = 'isStagedForDeletion';
    public const FIELD_SCHEDULING_GROUP_ID = 'schedulingGroupId';
    public const FIELD_SHARED_SHIFT = 'sharedShift';
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific Shift properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

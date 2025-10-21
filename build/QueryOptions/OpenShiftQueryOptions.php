<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OpenShift resources
 *
 * Available select fields:
 * - draftOpenShift
 * - isStagedForDeletion
 * - schedulingGroupId
 * - sharedOpenShift
 */
class OpenShiftQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OpenShift
     */
    public const FIELD_DRAFT_OPEN_SHIFT = 'draftOpenShift';
    public const FIELD_IS_STAGED_FOR_DELETION = 'isStagedForDeletion';
    public const FIELD_SCHEDULING_GROUP_ID = 'schedulingGroupId';
    public const FIELD_SHARED_OPEN_SHIFT = 'sharedOpenShift';

    /**
     * Select specific OpenShift properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

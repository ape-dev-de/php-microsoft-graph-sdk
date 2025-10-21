<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Shift
 */
class Shift
{
    public function __construct(
        /** Draft changes in the shift. Draft changes are only visible to managers. The changes are visible to employees when they''re shared, which copies the changes from the draftShift to the sharedShift property. */
        public ?string $draftShift = null,
        /** The shift is marked for deletion, a process that is finalized when the schedule is shared. */
        public ?bool $isStagedForDeletion = null,
        /** ID of the scheduling group the shift is part of. Required. */
        public ?string $schedulingGroupId = null,
        /** The shared version of this shift that is viewable by both employees and managers. Updates to the sharedShift property send notifications to users in the Teams client. */
        public ?string $sharedShift = null,
        /** ID of the user assigned to the shift. Required. */
        public ?string $userId = null
    ) {}
}

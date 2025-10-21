<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeOff
 */
class TimeOff
{
    public function __construct(
        /** The draft version of this timeOff item that is viewable by managers. It must be shared before it's visible to team members. Required. */
        public ?string $draftTimeOff = null,
        /** The timeOff is marked for deletion, a process that is finalized when the schedule is shared. */
        public ?bool $isStagedForDeletion = null,
        /** The shared version of this timeOff that is viewable by both employees and managers. Updates to the sharedTimeOff property send notifications to users in the Teams client. Required. */
        public ?string $sharedTimeOff = null,
        /** ID of the user assigned to the timeOff. Required. */
        public ?string $userId = null
    ) {}
}

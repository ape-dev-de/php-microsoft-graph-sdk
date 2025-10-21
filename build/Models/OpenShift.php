<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OpenShift
 */
class OpenShift
{
    public function __construct(
        /** Draft changes in the openShift are only visible to managers until they're shared. */
        public ?string $draftOpenShift = null,
        /** The openShift is marked for deletion, a process that is finalized when the schedule is shared. */
        public ?bool $isStagedForDeletion = null,
        /** The ID of the schedulingGroup that contains the openShift. */
        public ?string $schedulingGroupId = null,
        /** The shared version of this openShift that is viewable by both employees and managers. */
        public ?string $sharedOpenShift = null
    ) {}
}

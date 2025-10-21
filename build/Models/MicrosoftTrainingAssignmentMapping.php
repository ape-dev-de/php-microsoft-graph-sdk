<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftTrainingAssignmentMapping
 */
class MicrosoftTrainingAssignmentMapping
{
    public function __construct(
        /** A user collection that specifies to whom the training should be assigned. Possible values are: none, allUsers, clickedPayload, compromised, reportedPhish, readButNotClicked, didNothing, unknownFutureValue. */
        public array $assignedTo = [],
        /**  */
        public ?string $training = null
    ) {}
}

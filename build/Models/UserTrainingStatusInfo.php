<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserTrainingStatusInfo
 */
class UserTrainingStatusInfo
{
    public function __construct(
        /** Date and time of assignment of the training to the user. */
        public ?\DateTimeInterface $assignedDateTime = null,
        /** Date and time of completion of the training by the user. */
        public ?\DateTimeInterface $completionDateTime = null,
        /** Display name of the assigned training. */
        public ?string $displayName = null,
        /** The status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue. */
        public ?string $trainingStatus = null
    ) {}
}

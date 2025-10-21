<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserTrainingEventInfo
 */
class UserTrainingEventInfo
{
    public function __construct(
        /** Display name of the training. */
        public ?string $displayName = null,
        /** Latest status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue. */
        public ?TrainingStatus $latestTrainingStatus = null,
        /** Event details of the training when it was assigned to the user. */
        public ?UserTrainingContentEventInfo $trainingAssignedProperties = null,
        /** Event details of the training when it was completed by the user. */
        public ?UserTrainingContentEventInfo $trainingCompletedProperties = null,
        /** Event details of the training when it was updated/in-progress by the user. */
        public ?UserTrainingContentEventInfo $trainingUpdatedProperties = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftTrainingAssignmentMapping
 */
class MicrosoftTrainingAssignmentMapping
{
    public function __construct(
        /** Type of setting. Possible values are: microsoftCustom, microsoftManaged, noTraining, custom, unknownFutureValue. */
        public ?TrainingSettingType $settingType = null,
        /** A user collection that specifies to whom the training should be assigned. Possible values are: none, allUsers, clickedPayload, compromised, reportedPhish, readButNotClicked, didNothing, unknownFutureValue. */
        public array $assignedTo = [],
        /**  */
        public ?Training $training = null
    ) {}
}

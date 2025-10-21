<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftCustomTrainingSetting
 */
class MicrosoftCustomTrainingSetting
{
    public function __construct(
        /** Type of setting. Possible values are: microsoftCustom, microsoftManaged, noTraining, custom, unknownFutureValue. */
        public ?string $settingType = null,
        /** The completion date and time of the training. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $completionDateTime = null,
        /** The mapping details of the associated training. */
        public array $trainingAssignmentMappings = [],
        /** The training completion duration that needs to be provided before scheduling the training. Possible values are: week, fortnite, month, unknownFutureValue. */
        public ?string $trainingCompletionDuration = null
    ) {}
}

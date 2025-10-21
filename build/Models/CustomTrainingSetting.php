<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomTrainingSetting
 */
class CustomTrainingSetting
{
    public function __construct(
        /** A user collection that specifies to whom the training should be assigned. Possible values are: none, allUsers, clickedPayload, compromised, reportedPhish, readButNotClicked, didNothing, unknownFutureValue. */
        public array $assignedTo = [],
        /** The description of the custom training setting. */
        public ?string $description = null,
        /** The display name of the custom training setting. */
        public ?string $displayName = null,
        /** Training duration. */
        public ?float $durationInMinutes = null,
        /** The training URL. */
        public ?string $url = null
    ) {}
}

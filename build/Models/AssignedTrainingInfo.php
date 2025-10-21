<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignedTrainingInfo
 */
class AssignedTrainingInfo
{
    public function __construct(
        /** Number of users who were assigned the training in an attack simulation and training campaign. */
        public ?float $assignedUserCount = null,
        /** Number of users who completed the training in an attack simulation and training campaign. */
        public ?float $completedUserCount = null,
        /** Display name of the training in an attack simulation and training campaign. */
        public ?string $displayName = null
    ) {}
}

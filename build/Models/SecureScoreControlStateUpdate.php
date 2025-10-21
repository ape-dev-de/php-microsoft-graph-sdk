<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecureScoreControlStateUpdate
 */
class SecureScoreControlStateUpdate
{
    public function __construct(
        /** Assigns the control to the user who will take the action. */
        public ?string $assignedTo = null,
        /** Provides optional comment about the control. */
        public ?string $comment = null,
        /** State of the control, which can be modified via a PATCH command (for example, ignored, thirdParty). */
        public ?string $state = null,
        /** ID of the user who updated tenant state. */
        public ?string $updatedBy = null,
        /** Time at which the control state was updated. */
        public ?\DateTimeInterface $updatedDateTime = null
    ) {}
}

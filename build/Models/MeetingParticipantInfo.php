<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingParticipantInfo
 */
class MeetingParticipantInfo
{
    public function __construct(
        /** Identity information of the participant. */
        public ?IdentitySet $identity = null,
        /** Specifies the participant's role in the meeting. */
        public ?OnlineMeetingRole $role = null,
        /** User principal name of the participant. */
        public ?string $upn = null
    ) {}
}

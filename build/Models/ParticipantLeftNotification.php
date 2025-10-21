<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ParticipantLeftNotification
 */
class ParticipantLeftNotification
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** ID of the participant under the policy who has left the meeting. */
        public ?string $participantId = null,
        /**  */
        public ?string $call = null
    ) {}
}

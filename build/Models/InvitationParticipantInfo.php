<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InvitationParticipantInfo
 */
class InvitationParticipantInfo
{
    public function __construct(
        /** Optional. Whether to hide the participant from the roster. */
        public ?bool $hidden = null,
        /**  */
        public ?string $identity = null,
        /** Optional. The ID of the target participant. */
        public ?string $participantId = null,
        /** Optional. Whether to remove them from the main mixer. */
        public ?bool $removeFromDefaultAudioRoutingGroup = null,
        /** Optional. The call which the target identity is currently a part of. For peer-to-peer case, the call will be dropped once the participant is added successfully. */
        public ?string $replacesCallId = null
    ) {}
}

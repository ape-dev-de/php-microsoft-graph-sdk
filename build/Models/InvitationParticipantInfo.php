<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InvitationParticipantInfo
 */
class InvitationParticipantInfo
{
    /** Optional. Whether to hide the participant from the roster. */
    public ?bool $hidden = null;

    /**  */
    public ?IdentitySet $identity = null;

    /** Optional. The ID of the target participant. */
    public ?string $participantId = null;

    /** Optional. Whether to remove them from the main mixer. */
    public ?bool $removeFromDefaultAudioRoutingGroup = null;

    /** Optional. The call which the target identity is currently a part of. For peer-to-peer case, the call will be dropped once the participant is added successfully. */
    public ?string $replacesCallId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['hidden'])) {
            $this->hidden = $data['hidden'];
        }
        if (isset($data['identity'])) {
            $this->identity = is_array($data['identity']) ? new IdentitySet($data['identity']) : $data['identity'];
        }
        if (isset($data['participantId'])) {
            $this->participantId = $data['participantId'];
        }
        if (isset($data['removeFromDefaultAudioRoutingGroup'])) {
            $this->removeFromDefaultAudioRoutingGroup = $data['removeFromDefaultAudioRoutingGroup'];
        }
        if (isset($data['replacesCallId'])) {
            $this->replacesCallId = $data['replacesCallId'];
        }
    }
}

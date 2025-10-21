<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InvitationParticipantInfo
 */
class InvitationParticipantInfo
{
    /**
     * Optional. Whether to hide the participant from the roster.
     */
    private ?bool $hidden;

    /**
     */
    private ?string $identity;

    /**
     * Optional. The ID of the target participant.
     */
    private ?string $participantId;

    /**
     * Optional. Whether to remove them from the main mixer.
     */
    private ?bool $removeFromDefaultAudioRoutingGroup;

    /**
     * Optional. The call which the target identity is currently a part of. For peer-to-peer case, the call will be dropped once the participant is added successfully.
     */
    private ?string $replacesCallId;


    public function getHidden(): ?bool
    {
        return $this->hidden;
    }

    public function setHidden(?bool $hidden): self
    {
        $this->hidden = $hidden;
        return $this;
    }

    public function getIdentity(): ?string
    {
        return $this->identity;
    }

    public function setIdentity(?string $identity): self
    {
        $this->identity = $identity;
        return $this;
    }

    public function getParticipantId(): ?string
    {
        return $this->participantId;
    }

    public function setParticipantId(?string $participantId): self
    {
        $this->participantId = $participantId;
        return $this;
    }

    public function getRemoveFromDefaultAudioRoutingGroup(): ?bool
    {
        return $this->removeFromDefaultAudioRoutingGroup;
    }

    public function setRemoveFromDefaultAudioRoutingGroup(?bool $removeFromDefaultAudioRoutingGroup): self
    {
        $this->removeFromDefaultAudioRoutingGroup = $removeFromDefaultAudioRoutingGroup;
        return $this;
    }

    public function getReplacesCallId(): ?string
    {
        return $this->replacesCallId;
    }

    public function setReplacesCallId(?string $replacesCallId): self
    {
        $this->replacesCallId = $replacesCallId;
        return $this;
    }

}

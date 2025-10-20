<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Participant
 */
class Participant
{
    /**
     */
    private ?string $info;

    /**
     * true if the participant is in lobby.
     */
    private ?bool $isInLobby;

    /**
     * true if the participant is muted (client or server muted).
     */
    private ?bool $isMuted;

    /**
     * The list of media streams.
     */
    private array $mediaStreams = [];

    /**
     * A blob of data provided by the participant in the roster.
     */
    private ?string $metadata;

    /**
     * Information about whether the participant has recording capability.
     */
    private ?string $recordingInfo;

    /**
     * Indicates the reason why the participant was removed from the roster.
     */
    private ?string $removedState;

    /**
     * Indicates the reason or reasons media content from this participant is restricted.
     */
    private ?string $restrictedExperience;

    /**
     * Indicates the roster sequence number in which the participant was last updated.
     */
    private ?string $rosterSequenceNumber;

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(?string $info): self
    {
        $this->info = $info;
        return $this;
    }

    public function getIsInLobby(): ?bool
    {
        return $this->isInLobby;
    }

    public function setIsInLobby(?bool $isInLobby): self
    {
        $this->isInLobby = $isInLobby;
        return $this;
    }

    public function getIsMuted(): ?bool
    {
        return $this->isMuted;
    }

    public function setIsMuted(?bool $isMuted): self
    {
        $this->isMuted = $isMuted;
        return $this;
    }

    public function getMediaStreams(): array
    {
        return $this->mediaStreams;
    }

    public function setMediaStreams(array $mediaStreams): self
    {
        $this->mediaStreams = $mediaStreams;
        return $this;
    }

    public function getMetadata(): ?string
    {
        return $this->metadata;
    }

    public function setMetadata(?string $metadata): self
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function getRecordingInfo(): ?string
    {
        return $this->recordingInfo;
    }

    public function setRecordingInfo(?string $recordingInfo): self
    {
        $this->recordingInfo = $recordingInfo;
        return $this;
    }

    public function getRemovedState(): ?string
    {
        return $this->removedState;
    }

    public function setRemovedState(?string $removedState): self
    {
        $this->removedState = $removedState;
        return $this;
    }

    public function getRestrictedExperience(): ?string
    {
        return $this->restrictedExperience;
    }

    public function setRestrictedExperience(?string $restrictedExperience): self
    {
        $this->restrictedExperience = $restrictedExperience;
        return $this;
    }

    public function getRosterSequenceNumber(): ?string
    {
        return $this->rosterSequenceNumber;
    }

    public function setRosterSequenceNumber(?string $rosterSequenceNumber): self
    {
        $this->rosterSequenceNumber = $rosterSequenceNumber;
        return $this;
    }

}

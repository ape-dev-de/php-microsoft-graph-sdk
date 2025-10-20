<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScheduleChangeRequest
 */
class ScheduleChangeRequest
{
    /**
     * Indicates who the request is assigned to. Possible values are: sender, recipient, manager, system, unknownFutureValue.
     */
    private ?string $assignedTo;

    /**
     * The date and time when the manager approved or declined the scheduleChangeRequest. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $managerActionDateTime;

    /**
     * The message sent by the manager regarding the scheduleChangeRequest. Optional.
     */
    private ?string $managerActionMessage;

    /**
     * The user ID of the manager who approved or declined the scheduleChangeRequest.
     */
    private ?string $managerUserId;

    /**
     * The date and time when the sender sent the scheduleChangeRequest. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $senderDateTime;

    /**
     * The message sent by the sender of the scheduleChangeRequest. Optional.
     */
    private ?string $senderMessage;

    /**
     * The user ID of the sender of the scheduleChangeRequest.
     */
    private ?string $senderUserId;

    /**
     * The state of the scheduleChangeRequest. Possible values are: pending, approved, declined, unknownFutureValue.
     */
    private ?string $state;

    public function getAssignedTo(): ?string
    {
        return $this->assignedTo;
    }

    public function setAssignedTo(?string $assignedTo): self
    {
        $this->assignedTo = $assignedTo;
        return $this;
    }

    public function getManagerActionDateTime(): ?\DateTimeInterface
    {
        return $this->managerActionDateTime;
    }

    public function setManagerActionDateTime(?\DateTimeInterface $managerActionDateTime): self
    {
        $this->managerActionDateTime = $managerActionDateTime;
        return $this;
    }

    public function getManagerActionMessage(): ?string
    {
        return $this->managerActionMessage;
    }

    public function setManagerActionMessage(?string $managerActionMessage): self
    {
        $this->managerActionMessage = $managerActionMessage;
        return $this;
    }

    public function getManagerUserId(): ?string
    {
        return $this->managerUserId;
    }

    public function setManagerUserId(?string $managerUserId): self
    {
        $this->managerUserId = $managerUserId;
        return $this;
    }

    public function getSenderDateTime(): ?\DateTimeInterface
    {
        return $this->senderDateTime;
    }

    public function setSenderDateTime(?\DateTimeInterface $senderDateTime): self
    {
        $this->senderDateTime = $senderDateTime;
        return $this;
    }

    public function getSenderMessage(): ?string
    {
        return $this->senderMessage;
    }

    public function setSenderMessage(?string $senderMessage): self
    {
        $this->senderMessage = $senderMessage;
        return $this;
    }

    public function getSenderUserId(): ?string
    {
        return $this->senderUserId;
    }

    public function setSenderUserId(?string $senderUserId): self
    {
        $this->senderUserId = $senderUserId;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LearningAssignment
 */
class LearningAssignment
{
    /**
     * Assigned date for the course activity. Optional.
     */
    private ?\DateTimeInterface $assignedDateTime;

    /**
     * The user ID of the assigner. Optional.
     */
    private ?string $assignerUserId;

    /**
     */
    private ?string $assignmentType;

    /**
     * Due date for the course activity. Optional.
     */
    private ?string $dueDateTime;

    /**
     * Notes for the course activity. Optional.
     */
    private ?string $notes;

    public function getAssignedDateTime(): ?\DateTimeInterface
    {
        return $this->assignedDateTime;
    }

    public function setAssignedDateTime(?\DateTimeInterface $assignedDateTime): self
    {
        $this->assignedDateTime = $assignedDateTime;
        return $this;
    }

    public function getAssignerUserId(): ?string
    {
        return $this->assignerUserId;
    }

    public function setAssignerUserId(?string $assignerUserId): self
    {
        $this->assignerUserId = $assignerUserId;
        return $this;
    }

    public function getAssignmentType(): ?string
    {
        return $this->assignmentType;
    }

    public function setAssignmentType(?string $assignmentType): self
    {
        $this->assignmentType = $assignmentType;
        return $this;
    }

    public function getDueDateTime(): ?string
    {
        return $this->dueDateTime;
    }

    public function setDueDateTime(?string $dueDateTime): self
    {
        $this->dueDateTime = $dueDateTime;
        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;
        return $this;
    }

}

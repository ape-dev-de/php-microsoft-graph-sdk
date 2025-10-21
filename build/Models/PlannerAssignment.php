<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerAssignment
 */
class PlannerAssignment
{
    /**
     * The identity of the user that performed the assignment of the task, that is, the assignor.
     */
    private ?string $assignedBy;

    /**
     * The time when the task was assigned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $assignedDateTime;

    /**
     * Hint used to order assignees in a task. The format is defined as outlined here.
     */
    private ?string $orderHint;


    public function getAssignedBy(): ?string
    {
        return $this->assignedBy;
    }

    public function setAssignedBy(?string $assignedBy): self
    {
        $this->assignedBy = $assignedBy;
        return $this;
    }

    public function getAssignedDateTime(): ?\DateTimeInterface
    {
        return $this->assignedDateTime;
    }

    public function setAssignedDateTime(?\DateTimeInterface $assignedDateTime): self
    {
        $this->assignedDateTime = $assignedDateTime;
        return $this;
    }

    public function getOrderHint(): ?string
    {
        return $this->orderHint;
    }

    public function setOrderHint(?string $orderHint): self
    {
        $this->orderHint = $orderHint;
        return $this;
    }

}

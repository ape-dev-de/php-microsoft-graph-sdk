<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FollowupFlag
 */
class FollowupFlag
{
    /**
     * The date and time that the follow-up was finished.
     */
    private ?string $completedDateTime;

    /**
     * The date and time that the follow-up is to be finished. Note: To set the due date, you must also specify the startDateTime; otherwise, you get a 400 Bad Request response.
     */
    private ?string $dueDateTime;

    /**
     * The status for follow-up for an item. Possible values are notFlagged, complete, and flagged.
     */
    private ?string $flagStatus;

    /**
     * The date and time that the follow-up is to begin.
     */
    private ?string $startDateTime;


    public function getCompletedDateTime(): ?string
    {
        return $this->completedDateTime;
    }

    public function setCompletedDateTime(?string $completedDateTime): self
    {
        $this->completedDateTime = $completedDateTime;
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

    public function getFlagStatus(): ?string
    {
        return $this->flagStatus;
    }

    public function setFlagStatus(?string $flagStatus): self
    {
        $this->flagStatus = $flagStatus;
        return $this;
    }

    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

}

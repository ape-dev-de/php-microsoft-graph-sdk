<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskyUserHistoryItem
 */
class RiskyUserHistoryItem
{
    /**
     * The activity related to user risk level change.
     */
    private ?string $activity;

    /**
     * The ID of actor that does the operation.
     */
    private ?string $initiatedBy;

    /**
     * The ID of the user.
     */
    private ?string $userId;

    public function getActivity(): ?string
    {
        return $this->activity;
    }

    public function setActivity(?string $activity): self
    {
        $this->activity = $activity;
        return $this;
    }

    public function getInitiatedBy(): ?string
    {
        return $this->initiatedBy;
    }

    public function setInitiatedBy(?string $initiatedBy): self
    {
        $this->initiatedBy = $initiatedBy;
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

}

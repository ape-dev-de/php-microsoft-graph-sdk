<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskyServicePrincipalHistoryItem
 */
class RiskyServicePrincipalHistoryItem
{
    /**
     * The activity related to service principal risk level change.
     */
    private ?string $activity;

    /**
     * The identifier of the actor of the operation.
     */
    private ?string $initiatedBy;


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

}

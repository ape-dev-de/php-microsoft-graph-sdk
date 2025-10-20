<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerGroup
 */
class PlannerGroup
{
    /**
     * Read-only. Nullable. Returns the plannerPlans owned by the group.
     */
    private ?string $plans;

    public function getPlans(): ?string
    {
        return $this->plans;
    }

    public function setPlans(?string $plans): self
    {
        $this->plans = $plans;
        return $this;
    }

}

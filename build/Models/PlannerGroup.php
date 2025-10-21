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
     * @var string[]
     */
    private array $plans = [];


    /**
     * @return string[]
     */
    public function getPlans(): array
    {
        return $this->plans;
    }

    /**
     * @param string[] $plans
     */
    public function setPlans(array $plans): self
    {
        $this->plans = $plans;
        return $this;
    }

}

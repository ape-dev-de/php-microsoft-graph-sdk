<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerUser
 */
class PlannerUser
{
    /**
     * Read-only. Nullable. Returns the plannerTasks assigned to the user.
     */
    private array $plans = [];

    /**
     * Read-only. Nullable. Returns the plannerPlans shared with the user.
     */
    private ?string $tasks;

    public function getPlans(): array
    {
        return $this->plans;
    }

    public function setPlans(array $plans): self
    {
        $this->plans = $plans;
        return $this;
    }

    public function getTasks(): ?string
    {
        return $this->tasks;
    }

    public function setTasks(?string $tasks): self
    {
        $this->tasks = $tasks;
        return $this;
    }

}

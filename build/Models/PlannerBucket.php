<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerBucket
 */
class PlannerBucket
{
    /**
     * Name of the bucket.
     */
    private ?string $name;

    /**
     * Hint used to order items of this type in a list view. For details about the supported format, see Using order hints in Planner.
     */
    private ?string $orderHint;

    /**
     * Plan ID to which the bucket belongs.
     */
    private ?string $planId;

    /**
     * Read-only. Nullable. The collection of tasks in the bucket.
     * @var string[]
     */
    private array $tasks = [];


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
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

    public function getPlanId(): ?string
    {
        return $this->planId;
    }

    public function setPlanId(?string $planId): self
    {
        $this->planId = $planId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTasks(): array
    {
        return $this->tasks;
    }

    /**
     * @param string[] $tasks
     */
    public function setTasks(array $tasks): self
    {
        $this->tasks = $tasks;
        return $this;
    }

}

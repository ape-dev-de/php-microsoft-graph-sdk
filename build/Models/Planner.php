<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Planner
 */
class Planner
{
    /**
     * Read-only. Nullable. Returns a collection of the specified buckets
     */
    private array $buckets = [];

    /**
     * Read-only. Nullable. Returns a collection of the specified plans
     */
    private array $plans = [];

    /**
     * Read-only. Nullable. Returns a collection of the specified tasks
     * @var string[]
     */
    private array $tasks = [];


    public function getBuckets(): array
    {
        return $this->buckets;
    }

    public function setBuckets(array $buckets): self
    {
        $this->buckets = $buckets;
        return $this;
    }

    public function getPlans(): array
    {
        return $this->plans;
    }

    public function setPlans(array $plans): self
    {
        $this->plans = $plans;
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

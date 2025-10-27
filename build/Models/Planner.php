<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Planner
 */
class Planner
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Read-only. Nullable. Returns a collection of the specified buckets
     * @var PlannerBucket[]
     */
    public array $buckets = [];

    /** 
     * Read-only. Nullable. Returns a collection of the specified plans
     * @var PlannerPlan[]
     */
    public array $plans = [];

    /** 
     * Read-only. Nullable. Returns a collection of the specified tasks
     * @var PlannerTask[]
     */
    public array $tasks = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['buckets'])) {
            $this->buckets = $data['buckets'];
        }
        if (isset($data['plans'])) {
            $this->plans = $data['plans'];
        }
        if (isset($data['tasks'])) {
            $this->tasks = $data['tasks'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

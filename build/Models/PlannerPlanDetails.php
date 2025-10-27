<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerPlanDetails
 */
class PlannerPlanDetails
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * An object that specifies the descriptions of the 25 categories that can be associated with tasks in the plan.
     * @var PlannerCategoryDescriptions|\stdClass|null
     */
    public mixed $categoryDescriptions = null;

    /** 
     * Set of user IDs that this plan is shared with. If you're using Microsoft 365 groups, use the Groups API to manage group membership to share the group's plan. You can also add existing members of the group to this collection, although it isn't required for them to access the plan owned by the group.
     * @var PlannerUserIds|\stdClass|null
     */
    public mixed $sharedWith = null;


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
        if (isset($data['categoryDescriptions'])) {
            $this->categoryDescriptions = is_array($data['categoryDescriptions']) ? new PlannerCategoryDescriptions($data['categoryDescriptions']) : $data['categoryDescriptions'];
        }
        if (isset($data['sharedWith'])) {
            $this->sharedWith = is_array($data['sharedWith']) ? new PlannerUserIds($data['sharedWith']) : $data['sharedWith'];
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

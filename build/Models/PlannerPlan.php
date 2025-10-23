<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerPlan
 */
class PlannerPlan
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Identifies the container of the plan. Specify only the url, the containerId and type, or all properties. After it's set, this property can’t be updated. Required.
     * @var PlannerPlanContainer|\stdClass|null
     */
    public mixed $container = null;

    /** 
     * Read-only. The user who created the plan.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** Read-only. Date and time at which the plan is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Use the container property instead. ID of the group that owns the plan. After it's set, this property can’t be updated. This property won't return a valid group ID if the container of the plan isn't a group. */
    public ?string $owner = null;

    /** Required. Title of the plan. */
    public ?string $title = null;

    /** 
     * Read-only. Nullable. Collection of buckets in the plan.
     * @var PlannerBucket[]
     */
    public array $buckets = [];

    /** 
     * Read-only. Nullable. Extra details about the plan.
     * @var PlannerPlanDetails|\stdClass|null
     */
    public mixed $details = null;

    /** 
     * Read-only. Nullable. Collection of tasks in the plan.
     * @var PlannerTask[]
     */
    public array $tasks = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['container'])) {
            $this->container = is_array($data['container']) ? new PlannerPlanContainer($data['container']) : $data['container'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['owner'])) {
            $this->owner = $data['owner'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['buckets'])) {
            $this->buckets = $data['buckets'];
        }
        if (isset($data['details'])) {
            $this->details = is_array($data['details']) ? new PlannerPlanDetails($data['details']) : $data['details'];
        }
        if (isset($data['tasks'])) {
            $this->tasks = $data['tasks'];
        }
    }
}

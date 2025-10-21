<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerPlan
 */
class PlannerPlan
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identifies the container of the plan. Specify only the url, the containerId and type, or all properties. After it's set, this property can’t be updated. Required. */
        public ?string $container = null,
        /** Read-only. The user who created the plan. */
        public ?string $createdBy = null,
        /** Read-only. Date and time at which the plan is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Use the container property instead. ID of the group that owns the plan. After it's set, this property can’t be updated. This property won't return a valid group ID if the container of the plan isn't a group. */
        public ?string $owner = null,
        /** Required. Title of the plan. */
        public ?string $title = null,
        /** Read-only. Nullable. Collection of buckets in the plan. */
        public array $buckets = [],
        /** Read-only. Nullable. Extra details about the plan. */
        public ?string $details = null,
        /** Read-only. Nullable. Collection of tasks in the plan. */
        public array $tasks = []
    ) {}
}

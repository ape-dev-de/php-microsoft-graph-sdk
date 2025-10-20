<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerPlan
 */
class PlannerPlan
{
    /**
     * Identifies the container of the plan. Specify only the url, the containerId and type, or all properties. After it''s set, this property can’t be updated. Required.
     */
    private ?string $container;

    /**
     * Read-only. The user who created the plan.
     */
    private ?string $createdBy;

    /**
     * Read-only. Date and time at which the plan is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Use the container property instead. ID of the group that owns the plan. After it''s set, this property can’t be updated. This property won''t return a valid group ID if the container of the plan isn''t a group.
     */
    private ?string $owner;

    /**
     * Required. Title of the plan.
     */
    private ?string $title;

    /**
     * Read-only. Nullable. Collection of buckets in the plan.
     */
    private array $buckets = [];

    /**
     * Read-only. Nullable. Extra details about the plan.
     */
    private ?string $details;

    /**
     * Read-only. Nullable. Collection of tasks in the plan.
     */
    private ?string $tasks;

    public function getContainer(): ?string
    {
        return $this->container;
    }

    public function setContainer(?string $container): self
    {
        $this->container = $container;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getBuckets(): array
    {
        return $this->buckets;
    }

    public function setBuckets(array $buckets): self
    {
        $this->buckets = $buckets;
        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(?string $details): self
    {
        $this->details = $details;
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

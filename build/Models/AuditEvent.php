<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditEvent
 */
class AuditEvent
{
    /**
     * Friendly name of the activity.
     */
    private ?string $activity;

    /**
     * The date time in UTC when the activity was performed.
     */
    private ?\DateTimeInterface $activityDateTime;

    /**
     * The HTTP operation type of the activity.
     */
    private ?string $activityOperationType;

    /**
     * The result of the activity.
     */
    private ?string $activityResult;

    /**
     * The type of activity that was being performed.
     */
    private ?string $activityType;

    /**
     * AAD user and application that are associated with the audit event.
     */
    private ?string $actor;

    /**
     * Audit category.
     */
    private ?string $category;

    /**
     * Component name.
     */
    private ?string $componentName;

    /**
     * The client request Id that is used to correlate activity within the system.
     */
    private ?string $correlationId;

    /**
     * Event display name.
     */
    private ?string $displayName;

    /**
     * A class containing the properties for Audit Event.
     */
    private ?string $resources;

    public function getActivity(): ?string
    {
        return $this->activity;
    }

    public function setActivity(?string $activity): self
    {
        $this->activity = $activity;
        return $this;
    }

    public function getActivityDateTime(): ?\DateTimeInterface
    {
        return $this->activityDateTime;
    }

    public function setActivityDateTime(?\DateTimeInterface $activityDateTime): self
    {
        $this->activityDateTime = $activityDateTime;
        return $this;
    }

    public function getActivityOperationType(): ?string
    {
        return $this->activityOperationType;
    }

    public function setActivityOperationType(?string $activityOperationType): self
    {
        $this->activityOperationType = $activityOperationType;
        return $this;
    }

    public function getActivityResult(): ?string
    {
        return $this->activityResult;
    }

    public function setActivityResult(?string $activityResult): self
    {
        $this->activityResult = $activityResult;
        return $this;
    }

    public function getActivityType(): ?string
    {
        return $this->activityType;
    }

    public function setActivityType(?string $activityType): self
    {
        $this->activityType = $activityType;
        return $this;
    }

    public function getActor(): ?string
    {
        return $this->actor;
    }

    public function setActor(?string $actor): self
    {
        $this->actor = $actor;
        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function getComponentName(): ?string
    {
        return $this->componentName;
    }

    public function setComponentName(?string $componentName): self
    {
        $this->componentName = $componentName;
        return $this;
    }

    public function getCorrelationId(): ?string
    {
        return $this->correlationId;
    }

    public function setCorrelationId(?string $correlationId): self
    {
        $this->correlationId = $correlationId;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getResources(): ?string
    {
        return $this->resources;
    }

    public function setResources(?string $resources): self
    {
        $this->resources = $resources;
        return $this;
    }

}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignedPlan
 */
class AssignedPlan
{
    /**
     * The date and time at which the plan was assigned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $assignedDateTime;

    /**
     * Condition of the capability assignment. The possible values are Enabled, Warning, Suspended, Deleted, LockedOut. See a detailed description of each value.
     */
    private ?string $capabilityStatus;

    /**
     * The name of the service; for example, exchange.
     */
    private ?string $service;

    /**
     * A GUID that identifies the service plan. For a complete list of GUIDs and their equivalent friendly service names, see Product names and service plan identifiers for licensing.
     */
    private ?string $servicePlanId;


    public function getAssignedDateTime(): ?\DateTimeInterface
    {
        return $this->assignedDateTime;
    }

    public function setAssignedDateTime(?\DateTimeInterface $assignedDateTime): self
    {
        $this->assignedDateTime = $assignedDateTime;
        return $this;
    }

    public function getCapabilityStatus(): ?string
    {
        return $this->capabilityStatus;
    }

    public function setCapabilityStatus(?string $capabilityStatus): self
    {
        $this->capabilityStatus = $capabilityStatus;
        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(?string $service): self
    {
        $this->service = $service;
        return $this;
    }

    public function getServicePlanId(): ?string
    {
        return $this->servicePlanId;
    }

    public function setServicePlanId(?string $servicePlanId): self
    {
        $this->servicePlanId = $servicePlanId;
        return $this;
    }

}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningObjectSummary
 */
class ProvisioningObjectSummary
{
    /**
     * Represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  SUpports $filter (eq, gt, lt) and orderby.
     */
    private ?\DateTimeInterface $activityDateTime;

    /**
     * Unique ID of this change in this cycle. Supports $filter (eq, contains).
     */
    private ?string $changeId;

    /**
     * Unique ID per job iteration. Supports $filter (eq, contains).
     */
    private ?string $cycleId;

    /**
     * Indicates how long this provisioning action took to finish. Measured in milliseconds.
     */
    private ?float $durationInMilliseconds;

    /**
     * Details of who initiated this provisioning. Supports $filter (eq, contains).
     */
    private ?string $initiatedBy;

    /**
     * The unique ID for the whole provisioning job. Supports $filter (eq, contains).
     */
    private ?string $jobId;

    /**
     * Details of each property that was modified in this provisioning action on this object.
     */
    private array $modifiedProperties = [];

    /**
     * Indicates the activity name or the operation name. Possible values are: create, update, delete, stageddelete, disable, other and unknownFutureValue. For a list of activities logged, refer to Microsoft Entra activity list. Supports $filter (eq, contains).
     */
    private ?string $provisioningAction;

    /**
     * Details of provisioning status.
     */
    private ?string $provisioningStatusInfo;

    /**
     * Details of each step in provisioning.
     */
    private array $provisioningSteps = [];

    /**
     * Represents the service principal used for provisioning. Supports $filter (eq) for id and name.
     */
    private ?string $servicePrincipal;

    /**
     * Details of source object being provisioned. Supports $filter (eq, contains) for identityType, id, and displayName.
     */
    private ?string $sourceIdentity;

    /**
     * Details of source system of the object being provisioned. Supports $filter (eq, contains) for displayName.
     */
    private ?string $sourceSystem;

    /**
     * Details of target object being provisioned. Supports $filter (eq, contains) for identityType, id, and displayName.
     */
    private ?string $targetIdentity;

    /**
     * Details of target system of the object being provisioned. Supports $filter (eq, contains) for displayName.
     */
    private ?string $targetSystem;

    /**
     * Unique Microsoft Entra tenant ID. Supports $filter (eq, contains).
     */
    private ?string $tenantId;


    public function getActivityDateTime(): ?\DateTimeInterface
    {
        return $this->activityDateTime;
    }

    public function setActivityDateTime(?\DateTimeInterface $activityDateTime): self
    {
        $this->activityDateTime = $activityDateTime;
        return $this;
    }

    public function getChangeId(): ?string
    {
        return $this->changeId;
    }

    public function setChangeId(?string $changeId): self
    {
        $this->changeId = $changeId;
        return $this;
    }

    public function getCycleId(): ?string
    {
        return $this->cycleId;
    }

    public function setCycleId(?string $cycleId): self
    {
        $this->cycleId = $cycleId;
        return $this;
    }

    public function getDurationInMilliseconds(): ?float
    {
        return $this->durationInMilliseconds;
    }

    public function setDurationInMilliseconds(?float $durationInMilliseconds): self
    {
        $this->durationInMilliseconds = $durationInMilliseconds;
        return $this;
    }

    public function getInitiatedBy(): ?string
    {
        return $this->initiatedBy;
    }

    public function setInitiatedBy(?string $initiatedBy): self
    {
        $this->initiatedBy = $initiatedBy;
        return $this;
    }

    public function getJobId(): ?string
    {
        return $this->jobId;
    }

    public function setJobId(?string $jobId): self
    {
        $this->jobId = $jobId;
        return $this;
    }

    public function getModifiedProperties(): array
    {
        return $this->modifiedProperties;
    }

    public function setModifiedProperties(array $modifiedProperties): self
    {
        $this->modifiedProperties = $modifiedProperties;
        return $this;
    }

    public function getProvisioningAction(): ?string
    {
        return $this->provisioningAction;
    }

    public function setProvisioningAction(?string $provisioningAction): self
    {
        $this->provisioningAction = $provisioningAction;
        return $this;
    }

    public function getProvisioningStatusInfo(): ?string
    {
        return $this->provisioningStatusInfo;
    }

    public function setProvisioningStatusInfo(?string $provisioningStatusInfo): self
    {
        $this->provisioningStatusInfo = $provisioningStatusInfo;
        return $this;
    }

    public function getProvisioningSteps(): array
    {
        return $this->provisioningSteps;
    }

    public function setProvisioningSteps(array $provisioningSteps): self
    {
        $this->provisioningSteps = $provisioningSteps;
        return $this;
    }

    public function getServicePrincipal(): ?string
    {
        return $this->servicePrincipal;
    }

    public function setServicePrincipal(?string $servicePrincipal): self
    {
        $this->servicePrincipal = $servicePrincipal;
        return $this;
    }

    public function getSourceIdentity(): ?string
    {
        return $this->sourceIdentity;
    }

    public function setSourceIdentity(?string $sourceIdentity): self
    {
        $this->sourceIdentity = $sourceIdentity;
        return $this;
    }

    public function getSourceSystem(): ?string
    {
        return $this->sourceSystem;
    }

    public function setSourceSystem(?string $sourceSystem): self
    {
        $this->sourceSystem = $sourceSystem;
        return $this;
    }

    public function getTargetIdentity(): ?string
    {
        return $this->targetIdentity;
    }

    public function setTargetIdentity(?string $targetIdentity): self
    {
        $this->targetIdentity = $targetIdentity;
        return $this;
    }

    public function getTargetSystem(): ?string
    {
        return $this->targetSystem;
    }

    public function setTargetSystem(?string $targetSystem): self
    {
        $this->targetSystem = $targetSystem;
        return $this;
    }

    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;
        return $this;
    }

}

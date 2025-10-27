<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningObjectSummary
 */
class ProvisioningObjectSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  SUpports $filter (eq, gt, lt) and orderby. */
    public ?\DateTimeInterface $activityDateTime = null;

    /** Unique ID of this change in this cycle. Supports $filter (eq, contains). */
    public ?string $changeId = null;

    /** Unique ID per job iteration. Supports $filter (eq, contains). */
    public ?string $cycleId = null;

    /** Indicates how long this provisioning action took to finish. Measured in milliseconds. */
    public ?float $durationInMilliseconds = null;

    /** 
     * Details of who initiated this provisioning. Supports $filter (eq, contains).
     * @var Initiator|\stdClass|null
     */
    public Initiator|\stdClass|null $initiatedBy = null;

    /** The unique ID for the whole provisioning job. Supports $filter (eq, contains). */
    public ?string $jobId = null;

    /** 
     * Details of each property that was modified in this provisioning action on this object.
     * @var ModifiedProperty[]
     */
    public array $modifiedProperties = [];

    /** 
     * Indicates the activity name or the operation name. Possible values are: create, update, delete, stageddelete, disable, other and unknownFutureValue. For a list of activities logged, refer to Microsoft Entra activity list. Supports $filter (eq, contains).
     * @var ProvisioningAction|\stdClass|null
     */
    public ProvisioningAction|\stdClass|null $provisioningAction = null;

    /** 
     * Details of provisioning status.
     * @var ProvisioningStatusInfo|\stdClass|null
     */
    public ProvisioningStatusInfo|\stdClass|null $provisioningStatusInfo = null;

    /** 
     * Details of each step in provisioning.
     * @var ProvisioningStep[]
     */
    public array $provisioningSteps = [];

    /** 
     * Represents the service principal used for provisioning. Supports $filter (eq) for id and name.
     * @var ProvisioningServicePrincipal|\stdClass|null
     */
    public ProvisioningServicePrincipal|\stdClass|null $servicePrincipal = null;

    /** 
     * Details of source object being provisioned. Supports $filter (eq, contains) for identityType, id, and displayName.
     * @var ProvisionedIdentity|\stdClass|null
     */
    public ProvisionedIdentity|\stdClass|null $sourceIdentity = null;

    /** 
     * Details of source system of the object being provisioned. Supports $filter (eq, contains) for displayName.
     * @var ProvisioningSystem|\stdClass|null
     */
    public ProvisioningSystem|\stdClass|null $sourceSystem = null;

    /** 
     * Details of target object being provisioned. Supports $filter (eq, contains) for identityType, id, and displayName.
     * @var ProvisionedIdentity|\stdClass|null
     */
    public ProvisionedIdentity|\stdClass|null $targetIdentity = null;

    /** 
     * Details of target system of the object being provisioned. Supports $filter (eq, contains) for displayName.
     * @var ProvisioningSystem|\stdClass|null
     */
    public ProvisioningSystem|\stdClass|null $targetSystem = null;

    /** Unique Microsoft Entra tenant ID. Supports $filter (eq, contains). */
    public ?string $tenantId = null;


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
        if (isset($data['activityDateTime'])) {
            $this->activityDateTime = is_string($data['activityDateTime']) ? new \DateTimeImmutable($data['activityDateTime']) : $data['activityDateTime'];
        }
        if (isset($data['changeId'])) {
            $this->changeId = $data['changeId'];
        }
        if (isset($data['cycleId'])) {
            $this->cycleId = $data['cycleId'];
        }
        if (isset($data['durationInMilliseconds'])) {
            $this->durationInMilliseconds = is_numeric($data['durationInMilliseconds']) ? (float)$data['durationInMilliseconds'] : $data['durationInMilliseconds'];
        }
        if (isset($data['initiatedBy'])) {
            $this->initiatedBy = is_array($data['initiatedBy']) ? new Initiator($data['initiatedBy']) : $data['initiatedBy'];
        }
        if (isset($data['jobId'])) {
            $this->jobId = $data['jobId'];
        }
        if (isset($data['modifiedProperties'])) {
            $this->modifiedProperties = $data['modifiedProperties'];
        }
        if (isset($data['provisioningAction'])) {
            $this->provisioningAction = is_string($data['provisioningAction']) ? ProvisioningAction::tryFrom($data['provisioningAction']) : $data['provisioningAction'];
        }
        if (isset($data['provisioningStatusInfo'])) {
            $this->provisioningStatusInfo = is_array($data['provisioningStatusInfo']) ? new ProvisioningStatusInfo($data['provisioningStatusInfo']) : $data['provisioningStatusInfo'];
        }
        if (isset($data['provisioningSteps'])) {
            $this->provisioningSteps = $data['provisioningSteps'];
        }
        if (isset($data['servicePrincipal'])) {
            $this->servicePrincipal = is_array($data['servicePrincipal']) ? new ProvisioningServicePrincipal($data['servicePrincipal']) : $data['servicePrincipal'];
        }
        if (isset($data['sourceIdentity'])) {
            $this->sourceIdentity = is_array($data['sourceIdentity']) ? new ProvisionedIdentity($data['sourceIdentity']) : $data['sourceIdentity'];
        }
        if (isset($data['sourceSystem'])) {
            $this->sourceSystem = is_array($data['sourceSystem']) ? new ProvisioningSystem($data['sourceSystem']) : $data['sourceSystem'];
        }
        if (isset($data['targetIdentity'])) {
            $this->targetIdentity = is_array($data['targetIdentity']) ? new ProvisionedIdentity($data['targetIdentity']) : $data['targetIdentity'];
        }
        if (isset($data['targetSystem'])) {
            $this->targetSystem = is_array($data['targetSystem']) ? new ProvisioningSystem($data['targetSystem']) : $data['targetSystem'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
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

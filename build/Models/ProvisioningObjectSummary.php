<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningObjectSummary
 */
class ProvisioningObjectSummary
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  SUpports $filter (eq, gt, lt) and orderby. */
        public ?\DateTimeInterface $activityDateTime = null,
        /** Unique ID of this change in this cycle. Supports $filter (eq, contains). */
        public ?string $changeId = null,
        /** Unique ID per job iteration. Supports $filter (eq, contains). */
        public ?string $cycleId = null,
        /** Indicates how long this provisioning action took to finish. Measured in milliseconds. */
        public ?float $durationInMilliseconds = null,
        /** Details of who initiated this provisioning. Supports $filter (eq, contains). */
        public ?string $initiatedBy = null,
        /** The unique ID for the whole provisioning job. Supports $filter (eq, contains). */
        public ?string $jobId = null,
        /** Details of each property that was modified in this provisioning action on this object. */
        public array $modifiedProperties = [],
        /** Indicates the activity name or the operation name. Possible values are: create, update, delete, stageddelete, disable, other and unknownFutureValue. For a list of activities logged, refer to Microsoft Entra activity list. Supports $filter (eq, contains). */
        public ?string $provisioningAction = null,
        /** Details of provisioning status. */
        public ?string $provisioningStatusInfo = null,
        /** Details of each step in provisioning. */
        public array $provisioningSteps = [],
        /** Represents the service principal used for provisioning. Supports $filter (eq) for id and name. */
        public ?string $servicePrincipal = null,
        /** Details of source object being provisioned. Supports $filter (eq, contains) for identityType, id, and displayName. */
        public ?string $sourceIdentity = null,
        /** Details of source system of the object being provisioned. Supports $filter (eq, contains) for displayName. */
        public ?string $sourceSystem = null,
        /** Details of target object being provisioned. Supports $filter (eq, contains) for identityType, id, and displayName. */
        public ?string $targetIdentity = null,
        /** Details of target system of the object being provisioned. Supports $filter (eq, contains) for displayName. */
        public ?string $targetSystem = null,
        /** Unique Microsoft Entra tenant ID. Supports $filter (eq, contains). */
        public ?string $tenantId = null
    ) {}
}

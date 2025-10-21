<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProvisioningObjectSummary resources
 *
 * Available select fields:
 * - activityDateTime
 * - changeId
 * - cycleId
 * - durationInMilliseconds
 * - initiatedBy
 * - jobId
 * - modifiedProperties
 * - provisioningAction
 * - provisioningStatusInfo
 * - provisioningSteps
 * - servicePrincipal
 * - sourceIdentity
 * - sourceSystem
 * - targetIdentity
 * - targetSystem
 * - tenantId
 */
class ProvisioningObjectSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProvisioningObjectSummary
     */
    public const FIELD_ACTIVITY_DATE_TIME = 'activityDateTime';
    public const FIELD_CHANGE_ID = 'changeId';
    public const FIELD_CYCLE_ID = 'cycleId';
    public const FIELD_DURATION_IN_MILLISECONDS = 'durationInMilliseconds';
    public const FIELD_INITIATED_BY = 'initiatedBy';
    public const FIELD_JOB_ID = 'jobId';
    public const FIELD_MODIFIED_PROPERTIES = 'modifiedProperties';
    public const FIELD_PROVISIONING_ACTION = 'provisioningAction';
    public const FIELD_PROVISIONING_STATUS_INFO = 'provisioningStatusInfo';
    public const FIELD_PROVISIONING_STEPS = 'provisioningSteps';
    public const FIELD_SERVICE_PRINCIPAL = 'servicePrincipal';
    public const FIELD_SOURCE_IDENTITY = 'sourceIdentity';
    public const FIELD_SOURCE_SYSTEM = 'sourceSystem';
    public const FIELD_TARGET_IDENTITY = 'targetIdentity';
    public const FIELD_TARGET_SYSTEM = 'targetSystem';
    public const FIELD_TENANT_ID = 'tenantId';

    /**
     * Select specific ProvisioningObjectSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

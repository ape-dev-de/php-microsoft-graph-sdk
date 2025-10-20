<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedApprovalStage resources
 *
 * Available select fields:
 * - approvalStageTimeOutInDays
 * - escalationApprovers
 * - escalationTimeInMinutes
 * - isApproverJustificationRequired
 * - isEscalationEnabled
 * - primaryApprovers
 */
class UnifiedApprovalStageQueryOptions extends QueryOptions
{
    public const FIELD_APPROVAL_STAGE_TIME_OUT_IN_DAYS = 'approvalStageTimeOutInDays';
    public const FIELD_ESCALATION_APPROVERS = 'escalationApprovers';
    public const FIELD_ESCALATION_TIME_IN_MINUTES = 'escalationTimeInMinutes';
    public const FIELD_IS_APPROVER_JUSTIFICATION_REQUIRED = 'isApproverJustificationRequired';
    public const FIELD_IS_ESCALATION_ENABLED = 'isEscalationEnabled';
    public const FIELD_PRIMARY_APPROVERS = 'primaryApprovers';

    /**
     * Select specific UnifiedApprovalStage properties
     * 
     * @param array<string> $select Use UnifiedApprovalStageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

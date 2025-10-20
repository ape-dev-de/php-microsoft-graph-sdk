<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageApprovalStage resources
 *
 * Available select fields:
 * - durationBeforeAutomaticDenial
 * - durationBeforeEscalation
 * - escalationApprovers
 * - fallbackEscalationApprovers
 * - fallbackPrimaryApprovers
 * - isApproverJustificationRequired
 * - isEscalationEnabled
 * - primaryApprovers
 */
class AccessPackageApprovalStageQueryOptions extends QueryOptions
{
    public const FIELD_DURATION_BEFORE_AUTOMATIC_DENIAL = 'durationBeforeAutomaticDenial';
    public const FIELD_DURATION_BEFORE_ESCALATION = 'durationBeforeEscalation';
    public const FIELD_ESCALATION_APPROVERS = 'escalationApprovers';
    public const FIELD_FALLBACK_ESCALATION_APPROVERS = 'fallbackEscalationApprovers';
    public const FIELD_FALLBACK_PRIMARY_APPROVERS = 'fallbackPrimaryApprovers';
    public const FIELD_IS_APPROVER_JUSTIFICATION_REQUIRED = 'isApproverJustificationRequired';
    public const FIELD_IS_ESCALATION_ENABLED = 'isEscalationEnabled';
    public const FIELD_PRIMARY_APPROVERS = 'primaryApprovers';

    /**
     * Select specific AccessPackageApprovalStage properties
     * 
     * @param array<string> $select Use AccessPackageApprovalStageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

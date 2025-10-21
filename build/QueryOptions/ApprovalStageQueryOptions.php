<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApprovalStage resources
 *
 * Available select fields:
 * - assignedToMe
 * - displayName
 * - justification
 * - reviewedBy
 * - reviewedDateTime
 * - reviewResult
 * - status
 */
class ApprovalStageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ApprovalStage
     */
    public const FIELD_ASSIGNED_TO_ME = 'assignedToMe';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_JUSTIFICATION = 'justification';
    public const FIELD_REVIEWED_BY = 'reviewedBy';
    public const FIELD_REVIEWED_DATE_TIME = 'reviewedDateTime';
    public const FIELD_REVIEW_RESULT = 'reviewResult';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific ApprovalStage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

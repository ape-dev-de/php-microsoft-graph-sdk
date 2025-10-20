<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskyUser resources
 *
 * Available select fields:
 * - isDeleted
 * - isProcessing
 * - riskDetail
 * - riskLastUpdatedDateTime
 * - riskLevel
 * - riskState
 * - userDisplayName
 * - userPrincipalName
 * - history
 */
class RiskyUserQueryOptions extends QueryOptions
{
    public const FIELD_IS_DELETED = 'isDeleted';
    public const FIELD_IS_PROCESSING = 'isProcessing';
    public const FIELD_RISK_DETAIL = 'riskDetail';
    public const FIELD_RISK_LAST_UPDATED_DATE_TIME = 'riskLastUpdatedDateTime';
    public const FIELD_RISK_LEVEL = 'riskLevel';
    public const FIELD_RISK_STATE = 'riskState';
    public const FIELD_USER_DISPLAY_NAME = 'userDisplayName';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';
    public const FIELD_HISTORY = 'history';

    /**
     * Select specific RiskyUser properties
     * 
     * @param array<string> $select Use RiskyUserQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

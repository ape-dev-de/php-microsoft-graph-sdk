<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskyServicePrincipal resources
 *
 * Available select fields:
 * - appId
 * - displayName
 * - isEnabled
 * - isProcessing
 * - riskDetail
 * - riskLastUpdatedDateTime
 * - riskLevel
 * - riskState
 * - servicePrincipalType
 * - history
 */
class RiskyServicePrincipalQueryOptions extends QueryOptions
{
    public const FIELD_APP_ID = 'appId';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_IS_PROCESSING = 'isProcessing';
    public const FIELD_RISK_DETAIL = 'riskDetail';
    public const FIELD_RISK_LAST_UPDATED_DATE_TIME = 'riskLastUpdatedDateTime';
    public const FIELD_RISK_LEVEL = 'riskLevel';
    public const FIELD_RISK_STATE = 'riskState';
    public const FIELD_SERVICE_PRINCIPAL_TYPE = 'servicePrincipalType';
    public const FIELD_HISTORY = 'history';

    /**
     * Select specific RiskyServicePrincipal properties
     * 
     * @param array<string> $select Use RiskyServicePrincipalQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

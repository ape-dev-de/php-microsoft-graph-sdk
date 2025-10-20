<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskDetection resources
 *
 * Available select fields:
 * - activity
 * - activityDateTime
 * - additionalInfo
 * - correlationId
 * - detectedDateTime
 * - detectionTimingType
 * - ipAddress
 * - lastUpdatedDateTime
 * - location
 * - requestId
 * - riskDetail
 * - riskEventType
 * - riskLevel
 * - riskState
 * - source
 * - tokenIssuerType
 * - userDisplayName
 * - userId
 * - userPrincipalName
 */
class RiskDetectionQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVITY = 'activity';
    public const FIELD_ACTIVITY_DATE_TIME = 'activityDateTime';
    public const FIELD_ADDITIONAL_INFO = 'additionalInfo';
    public const FIELD_CORRELATION_ID = 'correlationId';
    public const FIELD_DETECTED_DATE_TIME = 'detectedDateTime';
    public const FIELD_DETECTION_TIMING_TYPE = 'detectionTimingType';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_LAST_UPDATED_DATE_TIME = 'lastUpdatedDateTime';
    public const FIELD_LOCATION = 'location';
    public const FIELD_REQUEST_ID = 'requestId';
    public const FIELD_RISK_DETAIL = 'riskDetail';
    public const FIELD_RISK_EVENT_TYPE = 'riskEventType';
    public const FIELD_RISK_LEVEL = 'riskLevel';
    public const FIELD_RISK_STATE = 'riskState';
    public const FIELD_SOURCE = 'source';
    public const FIELD_TOKEN_ISSUER_TYPE = 'tokenIssuerType';
    public const FIELD_USER_DISPLAY_NAME = 'userDisplayName';
    public const FIELD_USER_ID = 'userId';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific RiskDetection properties
     * 
     * @param array<string> $select Use RiskDetectionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

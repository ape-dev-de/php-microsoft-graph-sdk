<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServicePrincipalRiskDetection resources
 *
 * Available select fields:
 * - activity
 * - activityDateTime
 * - additionalInfo
 * - appId
 * - correlationId
 * - detectedDateTime
 * - detectionTimingType
 * - ipAddress
 * - keyIds
 * - lastUpdatedDateTime
 * - location
 * - requestId
 * - riskDetail
 * - riskEventType
 * - riskLevel
 * - riskState
 * - servicePrincipalDisplayName
 * - servicePrincipalId
 * - source
 * - tokenIssuerType
 */
class ServicePrincipalRiskDetectionQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVITY = 'activity';
    public const FIELD_ACTIVITY_DATE_TIME = 'activityDateTime';
    public const FIELD_ADDITIONAL_INFO = 'additionalInfo';
    public const FIELD_APP_ID = 'appId';
    public const FIELD_CORRELATION_ID = 'correlationId';
    public const FIELD_DETECTED_DATE_TIME = 'detectedDateTime';
    public const FIELD_DETECTION_TIMING_TYPE = 'detectionTimingType';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_KEY_IDS = 'keyIds';
    public const FIELD_LAST_UPDATED_DATE_TIME = 'lastUpdatedDateTime';
    public const FIELD_LOCATION = 'location';
    public const FIELD_REQUEST_ID = 'requestId';
    public const FIELD_RISK_DETAIL = 'riskDetail';
    public const FIELD_RISK_EVENT_TYPE = 'riskEventType';
    public const FIELD_RISK_LEVEL = 'riskLevel';
    public const FIELD_RISK_STATE = 'riskState';
    public const FIELD_SERVICE_PRINCIPAL_DISPLAY_NAME = 'servicePrincipalDisplayName';
    public const FIELD_SERVICE_PRINCIPAL_ID = 'servicePrincipalId';
    public const FIELD_SOURCE = 'source';
    public const FIELD_TOKEN_ISSUER_TYPE = 'tokenIssuerType';

    /**
     * Select specific ServicePrincipalRiskDetection properties
     * 
     * @param array<string> $select Use ServicePrincipalRiskDetectionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

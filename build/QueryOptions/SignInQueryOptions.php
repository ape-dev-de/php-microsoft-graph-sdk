<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SignIn resources
 *
 * Available select fields:
 * - appDisplayName
 * - appId
 * - appliedConditionalAccessPolicies
 * - clientAppUsed
 * - conditionalAccessStatus
 * - correlationId
 * - createdDateTime
 * - deviceDetail
 * - ipAddress
 * - isInteractive
 * - location
 * - resourceDisplayName
 * - resourceId
 * - riskDetail
 * - riskEventTypes
 * - riskEventTypes_v2
 * - riskLevelAggregated
 * - riskLevelDuringSignIn
 * - riskState
 * - status
 * - userDisplayName
 * - userId
 * - userPrincipalName
 */
class SignInQueryOptions extends QueryOptions
{
    public const FIELD_APP_DISPLAY_NAME = 'appDisplayName';
    public const FIELD_APP_ID = 'appId';
    public const FIELD_APPLIED_CONDITIONAL_ACCESS_POLICIES = 'appliedConditionalAccessPolicies';
    public const FIELD_CLIENT_APP_USED = 'clientAppUsed';
    public const FIELD_CONDITIONAL_ACCESS_STATUS = 'conditionalAccessStatus';
    public const FIELD_CORRELATION_ID = 'correlationId';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DEVICE_DETAIL = 'deviceDetail';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_IS_INTERACTIVE = 'isInteractive';
    public const FIELD_LOCATION = 'location';
    public const FIELD_RESOURCE_DISPLAY_NAME = 'resourceDisplayName';
    public const FIELD_RESOURCE_ID = 'resourceId';
    public const FIELD_RISK_DETAIL = 'riskDetail';
    public const FIELD_RISK_EVENT_TYPES = 'riskEventTypes';
    public const FIELD_RISK_EVENT_TYPES_V2 = 'riskEventTypes_v2';
    public const FIELD_RISK_LEVEL_AGGREGATED = 'riskLevelAggregated';
    public const FIELD_RISK_LEVEL_DURING_SIGN_IN = 'riskLevelDuringSignIn';
    public const FIELD_RISK_STATE = 'riskState';
    public const FIELD_STATUS = 'status';
    public const FIELD_USER_DISPLAY_NAME = 'userDisplayName';
    public const FIELD_USER_ID = 'userId';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific SignIn properties
     * 
     * @param array<string> $select Use SignInQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

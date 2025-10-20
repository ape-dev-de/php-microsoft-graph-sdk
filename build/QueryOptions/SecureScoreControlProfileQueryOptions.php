<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecureScoreControlProfile resources
 *
 * Available select fields:
 * - actionType
 * - actionUrl
 * - azureTenantId
 * - complianceInformation
 * - controlCategory
 * - controlStateUpdates
 * - deprecated
 * - implementationCost
 * - lastModifiedDateTime
 * - maxScore
 * - rank
 * - remediation
 * - remediationImpact
 * - service
 * - threats
 * - tier
 * - title
 * - userImpact
 * - vendorInformation
 */
class SecureScoreControlProfileQueryOptions extends QueryOptions
{
    public const FIELD_ACTION_TYPE = 'actionType';
    public const FIELD_ACTION_URL = 'actionUrl';
    public const FIELD_AZURE_TENANT_ID = 'azureTenantId';
    public const FIELD_COMPLIANCE_INFORMATION = 'complianceInformation';
    public const FIELD_CONTROL_CATEGORY = 'controlCategory';
    public const FIELD_CONTROL_STATE_UPDATES = 'controlStateUpdates';
    public const FIELD_DEPRECATED = 'deprecated';
    public const FIELD_IMPLEMENTATION_COST = 'implementationCost';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_MAX_SCORE = 'maxScore';
    public const FIELD_RANK = 'rank';
    public const FIELD_REMEDIATION = 'remediation';
    public const FIELD_REMEDIATION_IMPACT = 'remediationImpact';
    public const FIELD_SERVICE = 'service';
    public const FIELD_THREATS = 'threats';
    public const FIELD_TIER = 'tier';
    public const FIELD_TITLE = 'title';
    public const FIELD_USER_IMPACT = 'userImpact';
    public const FIELD_VENDOR_INFORMATION = 'vendorInformation';

    /**
     * Select specific SecureScoreControlProfile properties
     * 
     * @param array<string> $select Use SecureScoreControlProfileQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHealthIssue resources
 *
 * Available select fields:
 * - additionalInformation
 * - createdDateTime
 * - description
 * - displayName
 * - domainNames
 * - healthIssueType
 * - issueTypeId
 * - lastModifiedDateTime
 * - recommendations
 * - recommendedActionCommands
 * - sensorDNSNames
 * - severity
 * - status
 */
class SecurityHealthIssueQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHealthIssue
     */
    public const FIELD_ADDITIONAL_INFORMATION = 'additionalInformation';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DOMAIN_NAMES = 'domainNames';
    public const FIELD_HEALTH_ISSUE_TYPE = 'healthIssueType';
    public const FIELD_ISSUE_TYPE_ID = 'issueTypeId';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_RECOMMENDATIONS = 'recommendations';
    public const FIELD_RECOMMENDED_ACTION_COMMANDS = 'recommendedActionCommands';
    public const FIELD_SENSOR_DNSNAMES = 'sensorDNSNames';
    public const FIELD_SEVERITY = 'severity';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific SecurityHealthIssue properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

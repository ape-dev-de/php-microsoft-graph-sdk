<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySensor resources
 *
 * Available select fields:
 * - createdDateTime
 * - deploymentStatus
 * - displayName
 * - domainName
 * - healthStatus
 * - openHealthIssuesCount
 * - sensorType
 * - settings
 * - version
 * - healthIssues
 */
class SecuritySensorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySensor
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DEPLOYMENT_STATUS = 'deploymentStatus';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DOMAIN_NAME = 'domainName';
    public const FIELD_HEALTH_STATUS = 'healthStatus';
    public const FIELD_OPEN_HEALTH_ISSUES_COUNT = 'openHealthIssuesCount';
    public const FIELD_SENSOR_TYPE = 'sensorType';
    public const FIELD_SETTINGS = 'settings';
    public const FIELD_VERSION = 'version';
    public const FIELD_HEALTH_ISSUES = 'healthIssues';

    /**
     * Select specific SecuritySensor properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

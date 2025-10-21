<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppPolicyDeploymentSummary resources
 *
 * Available select fields:
 * - configurationDeployedUserCount
 * - configurationDeploymentSummaryPerApp
 * - displayName
 * - lastRefreshTime
 * - version
 */
class ManagedAppPolicyDeploymentSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppPolicyDeploymentSummary
     */
    public const FIELD_CONFIGURATION_DEPLOYED_USER_COUNT = 'configurationDeployedUserCount';
    public const FIELD_CONFIGURATION_DEPLOYMENT_SUMMARY_PER_APP = 'configurationDeploymentSummaryPerApp';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_REFRESH_TIME = 'lastRefreshTime';
    public const FIELD_VERSION = 'version';

    /**
     * Select specific ManagedAppPolicyDeploymentSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

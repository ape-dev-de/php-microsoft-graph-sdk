<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppPolicyDeploymentSummaryPerApp resources
 *
 * Available select fields:
 * - configurationAppliedUserCount
 * - mobileAppIdentifier
 */
class ManagedAppPolicyDeploymentSummaryPerAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppPolicyDeploymentSummaryPerApp
     */
    public const FIELD_CONFIGURATION_APPLIED_USER_COUNT = 'configurationAppliedUserCount';
    public const FIELD_MOBILE_APP_IDENTIFIER = 'mobileAppIdentifier';

    /**
     * Select specific ManagedAppPolicyDeploymentSummaryPerApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

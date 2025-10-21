<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetedManagedAppConfiguration resources
 *
 * Available select fields:
 * - deployedAppCount
 * - isAssigned
 * - apps
 * - assignments
 * - deploymentSummary
 */
class TargetedManagedAppConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TargetedManagedAppConfiguration
     */
    public const FIELD_DEPLOYED_APP_COUNT = 'deployedAppCount';
    public const FIELD_IS_ASSIGNED = 'isAssigned';
    public const FIELD_APPS = 'apps';
    public const FIELD_ASSIGNMENTS = 'assignments';
    public const FIELD_DEPLOYMENT_SUMMARY = 'deploymentSummary';

    /**
     * Select specific TargetedManagedAppConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

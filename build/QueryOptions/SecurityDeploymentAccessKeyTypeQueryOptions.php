<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDeploymentAccessKeyType resources
 *
 * Available select fields:
 * - deploymentAccessKey
 */
class SecurityDeploymentAccessKeyTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDeploymentAccessKeyType
     */
    public const FIELD_DEPLOYMENT_ACCESS_KEY = 'deploymentAccessKey';

    /**
     * Select specific SecurityDeploymentAccessKeyType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

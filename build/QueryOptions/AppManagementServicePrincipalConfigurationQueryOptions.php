<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppManagementServicePrincipalConfiguration resources
 *
 * Available select fields:
 */
class AppManagementServicePrincipalConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppManagementServicePrincipalConfiguration
     */

    /**
     * Select specific AppManagementServicePrincipalConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

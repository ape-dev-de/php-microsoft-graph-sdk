<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppManagementApplicationConfiguration resources
 *
 * Available select fields:
 */
class AppManagementApplicationConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppManagementApplicationConfiguration
     */

    /**
     * Select specific AppManagementApplicationConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

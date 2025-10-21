<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomAppManagementConfiguration resources
 *
 * Available select fields:
 */
class CustomAppManagementConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomAppManagementConfiguration
     */

    /**
     * Select specific CustomAppManagementConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

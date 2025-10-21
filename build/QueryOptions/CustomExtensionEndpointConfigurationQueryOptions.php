<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomExtensionEndpointConfiguration resources
 *
 * Available select fields:
 */
class CustomExtensionEndpointConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomExtensionEndpointConfiguration
     */

    /**
     * Select specific CustomExtensionEndpointConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

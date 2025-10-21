<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomExtensionAuthenticationConfiguration resources
 *
 * Available select fields:
 */
class CustomExtensionAuthenticationConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomExtensionAuthenticationConfiguration
     */

    /**
     * Select specific CustomExtensionAuthenticationConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

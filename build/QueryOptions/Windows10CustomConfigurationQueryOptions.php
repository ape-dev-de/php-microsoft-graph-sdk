<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10CustomConfiguration resources
 *
 * Available select fields:
 */
class Windows10CustomConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows10CustomConfiguration
     */

    /**
     * Select specific Windows10CustomConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

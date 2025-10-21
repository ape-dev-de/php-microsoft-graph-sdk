<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidWorkProfileCustomConfiguration resources
 *
 * Available select fields:
 */
class AndroidWorkProfileCustomConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidWorkProfileCustomConfiguration
     */

    /**
     * Select specific AndroidWorkProfileCustomConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

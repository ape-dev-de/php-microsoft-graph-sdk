<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceApp resources
 *
 * Available select fields:
 */
class ServiceAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceApp
     */

    /**
     * Select specific ServiceApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

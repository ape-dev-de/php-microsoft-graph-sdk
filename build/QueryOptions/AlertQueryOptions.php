<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Alert resources
 *
 * Available select fields:
 */
class AlertQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Alert
     */

    /**
     * Select specific Alert properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

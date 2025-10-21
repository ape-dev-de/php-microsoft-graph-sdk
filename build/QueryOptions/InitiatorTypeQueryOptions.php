<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InitiatorType resources
 *
 * Available select fields:
 */
class InitiatorTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InitiatorType
     */

    /**
     * Select specific InitiatorType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

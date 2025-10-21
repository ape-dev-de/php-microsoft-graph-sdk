<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Message resources
 *
 * Available select fields:
 */
class MessageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Message
     */

    /**
     * Select specific Message properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

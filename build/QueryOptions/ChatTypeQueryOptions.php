<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatType resources
 *
 * Available select fields:
 */
class ChatTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatType
     */

    /**
     * Select specific ChatType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

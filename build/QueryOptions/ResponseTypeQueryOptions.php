<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResponseType resources
 *
 * Available select fields:
 */
class ResponseTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ResponseType
     */

    /**
     * Select specific ResponseType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmailPayloadDetail resources
 *
 * Available select fields:
 */
class EmailPayloadDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EmailPayloadDetail
     */

    /**
     * Select specific EmailPayloadDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

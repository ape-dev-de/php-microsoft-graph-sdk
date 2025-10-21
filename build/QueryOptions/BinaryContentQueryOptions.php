<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BinaryContent resources
 *
 * Available select fields:
 */
class BinaryContentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BinaryContent
     */

    /**
     * Select specific BinaryContent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

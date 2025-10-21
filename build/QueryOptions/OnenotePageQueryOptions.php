<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenotePage resources
 *
 * Available select fields:
 */
class OnenotePageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenotePage
     */

    /**
     * Select specific OnenotePage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

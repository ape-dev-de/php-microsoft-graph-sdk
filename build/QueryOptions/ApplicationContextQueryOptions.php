<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApplicationContext resources
 *
 * Available select fields:
 */
class ApplicationContextQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ApplicationContext
     */

    /**
     * Select specific ApplicationContext properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

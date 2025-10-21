<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PersistentBrowserSessionControl resources
 *
 * Available select fields:
 */
class PersistentBrowserSessionControlQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PersistentBrowserSessionControl
     */

    /**
     * Select specific PersistentBrowserSessionControl properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

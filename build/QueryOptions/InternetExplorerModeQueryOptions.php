<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InternetExplorerMode resources
 *
 * Available select fields:
 */
class InternetExplorerModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InternetExplorerMode
     */

    /**
     * Select specific InternetExplorerMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

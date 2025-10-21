<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AutomaticUpdateMode resources
 *
 * Available select fields:
 */
class AutomaticUpdateModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AutomaticUpdateMode
     */

    /**
     * Select specific AutomaticUpdateMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

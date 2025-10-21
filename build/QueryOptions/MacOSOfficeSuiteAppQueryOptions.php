<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSOfficeSuiteApp resources
 *
 * Available select fields:
 */
class MacOSOfficeSuiteAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOSOfficeSuiteApp
     */

    /**
     * Select specific MacOSOfficeSuiteApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LandingPage resources
 *
 * Available select fields:
 */
class LandingPageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LandingPage
     */

    /**
     * Select specific LandingPage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

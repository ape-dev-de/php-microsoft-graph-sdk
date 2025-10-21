<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PayloadTheme resources
 *
 * Available select fields:
 */
class PayloadThemeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PayloadTheme
     */

    /**
     * Select specific PayloadTheme properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

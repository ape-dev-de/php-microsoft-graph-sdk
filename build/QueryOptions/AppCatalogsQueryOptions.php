<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppCatalogs resources
 *
 * Available select fields:
 */
class AppCatalogsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppCatalogs
     */

    /**
     * Select specific AppCatalogs properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

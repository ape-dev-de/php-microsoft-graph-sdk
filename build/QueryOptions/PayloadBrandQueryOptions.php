<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PayloadBrand resources
 *
 * Available select fields:
 */
class PayloadBrandQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PayloadBrand
     */

    /**
     * Select specific PayloadBrand properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

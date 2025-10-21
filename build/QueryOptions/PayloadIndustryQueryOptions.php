<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PayloadIndustry resources
 *
 * Available select fields:
 */
class PayloadIndustryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PayloadIndustry
     */

    /**
     * Select specific PayloadIndustry properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

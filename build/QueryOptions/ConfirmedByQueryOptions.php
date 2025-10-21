<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConfirmedBy resources
 *
 * Available select fields:
 */
class ConfirmedByQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConfirmedBy
     */

    /**
     * Select specific ConfirmedBy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

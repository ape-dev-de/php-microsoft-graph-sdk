<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecipientScopeType resources
 *
 * Available select fields:
 */
class RecipientScopeTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RecipientScopeType
     */

    /**
     * Select specific RecipientScopeType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

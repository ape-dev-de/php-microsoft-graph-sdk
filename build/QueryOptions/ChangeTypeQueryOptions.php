<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChangeType resources
 *
 * Available select fields:
 */
class ChangeTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChangeType
     */

    /**
     * Select specific ChangeType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

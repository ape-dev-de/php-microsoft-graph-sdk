<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Root resources
 *
 * Available select fields:
 */
class RootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Root
     */

    /**
     * Select specific Root properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProfileCardProperty resources
 *
 * Available select fields:
 */
class ProfileCardPropertyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProfileCardProperty
     */

    /**
     * Select specific ProfileCardProperty properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

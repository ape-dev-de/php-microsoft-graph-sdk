<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DisableAndDeleteUserApplyAction resources
 *
 * Available select fields:
 */
class DisableAndDeleteUserApplyActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DisableAndDeleteUserApplyAction
     */

    /**
     * Select specific DisableAndDeleteUserApplyAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RemoveAccessApplyAction resources
 *
 * Available select fields:
 */
class RemoveAccessApplyActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RemoveAccessApplyAction
     */

    /**
     * Select specific RemoveAccessApplyAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

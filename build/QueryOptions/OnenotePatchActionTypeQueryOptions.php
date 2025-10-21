<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenotePatchActionType resources
 *
 * Available select fields:
 */
class OnenotePatchActionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenotePatchActionType
     */

    /**
     * Select specific OnenotePatchActionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

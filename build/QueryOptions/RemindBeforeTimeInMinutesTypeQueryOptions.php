<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RemindBeforeTimeInMinutesType resources
 *
 * Available select fields:
 */
class RemindBeforeTimeInMinutesTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RemindBeforeTimeInMinutesType
     */

    /**
     * Select specific RemindBeforeTimeInMinutesType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

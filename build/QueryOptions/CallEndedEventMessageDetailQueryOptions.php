<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallEndedEventMessageDetail resources
 *
 * Available select fields:
 */
class CallEndedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallEndedEventMessageDetail
     */

    /**
     * Select specific CallEndedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

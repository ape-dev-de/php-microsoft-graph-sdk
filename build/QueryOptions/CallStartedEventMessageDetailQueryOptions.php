<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallStartedEventMessageDetail resources
 *
 * Available select fields:
 */
class CallStartedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallStartedEventMessageDetail
     */

    /**
     * Select specific CallStartedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

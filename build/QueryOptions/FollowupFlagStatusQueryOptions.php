<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FollowupFlagStatus resources
 *
 * Available select fields:
 */
class FollowupFlagStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FollowupFlagStatus
     */

    /**
     * Select specific FollowupFlagStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

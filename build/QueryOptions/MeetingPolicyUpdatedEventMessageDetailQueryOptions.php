<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MeetingPolicyUpdatedEventMessageDetail resources
 *
 * Available select fields:
 */
class MeetingPolicyUpdatedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MeetingPolicyUpdatedEventMessageDetail
     */

    /**
     * Select specific MeetingPolicyUpdatedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnlineMeetingContentSharingDisabledReason resources
 *
 * Available select fields:
 */
class OnlineMeetingContentSharingDisabledReasonQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnlineMeetingContentSharingDisabledReason
     */

    /**
     * Select specific OnlineMeetingContentSharingDisabledReason properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewScheduleDefinitionFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class AccessReviewScheduleDefinitionFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewScheduleDefinitionFilterByCurrentUserOptions
     */

    /**
     * Select specific AccessReviewScheduleDefinitionFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

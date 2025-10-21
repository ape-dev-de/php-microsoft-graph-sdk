<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsUserFeedbackRating resources
 *
 * Available select fields:
 */
class CallRecordsUserFeedbackRatingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsUserFeedbackRating
     */

    /**
     * Select specific CallRecordsUserFeedbackRating properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

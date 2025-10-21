<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResponseFeedbackType resources
 *
 * Available select fields:
 */
class ResponseFeedbackTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ResponseFeedbackType
     */

    /**
     * Select specific ResponseFeedbackType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

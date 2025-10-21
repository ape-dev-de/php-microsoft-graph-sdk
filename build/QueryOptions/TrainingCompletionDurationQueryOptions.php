<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TrainingCompletionDuration resources
 *
 * Available select fields:
 */
class TrainingCompletionDurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TrainingCompletionDuration
     */

    /**
     * Select specific TrainingCompletionDuration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

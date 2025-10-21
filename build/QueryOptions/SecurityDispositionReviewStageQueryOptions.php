<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDispositionReviewStage resources
 *
 * Available select fields:
 */
class SecurityDispositionReviewStageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDispositionReviewStage
     */

    /**
     * Select specific SecurityDispositionReviewStage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

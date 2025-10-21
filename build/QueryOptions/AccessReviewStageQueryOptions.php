<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewStage resources
 *
 * Available select fields:
 */
class AccessReviewStageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewStage
     */

    /**
     * Select specific AccessReviewStage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewHistoryDefinition resources
 *
 * Available select fields:
 */
class AccessReviewHistoryDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewHistoryDefinition
     */

    /**
     * Select specific AccessReviewHistoryDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

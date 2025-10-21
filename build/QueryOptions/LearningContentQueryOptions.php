<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LearningContent resources
 *
 * Available select fields:
 */
class LearningContentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LearningContent
     */

    /**
     * Select specific LearningContent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

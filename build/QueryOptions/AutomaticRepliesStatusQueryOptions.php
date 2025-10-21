<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AutomaticRepliesStatus resources
 *
 * Available select fields:
 */
class AutomaticRepliesStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AutomaticRepliesStatus
     */

    /**
     * Select specific AutomaticRepliesStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlayPromptOperation resources
 *
 * Available select fields:
 */
class PlayPromptOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlayPromptOperation
     */

    /**
     * Select specific PlayPromptOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

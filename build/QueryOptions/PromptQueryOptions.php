<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Prompt resources
 *
 * Available select fields:
 */
class PromptQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Prompt
     */

    /**
     * Select specific Prompt properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

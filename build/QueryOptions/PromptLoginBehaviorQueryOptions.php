<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PromptLoginBehavior resources
 *
 * Available select fields:
 */
class PromptLoginBehaviorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PromptLoginBehavior
     */

    /**
     * Select specific PromptLoginBehavior properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

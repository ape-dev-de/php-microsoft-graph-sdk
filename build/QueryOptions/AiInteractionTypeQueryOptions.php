<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiInteractionType resources
 *
 * Available select fields:
 */
class AiInteractionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AiInteractionType
     */

    /**
     * Select specific AiInteractionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

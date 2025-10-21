<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiInteraction resources
 *
 * Available select fields:
 */
class AiInteractionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AiInteraction
     */

    /**
     * Select specific AiInteraction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

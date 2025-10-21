<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiInteractionHistory resources
 *
 * Available select fields:
 */
class AiInteractionHistoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AiInteractionHistory
     */

    /**
     * Select specific AiInteractionHistory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

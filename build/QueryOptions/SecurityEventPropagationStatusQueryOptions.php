<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEventPropagationStatus resources
 *
 * Available select fields:
 */
class SecurityEventPropagationStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEventPropagationStatus
     */

    /**
     * Select specific SecurityEventPropagationStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

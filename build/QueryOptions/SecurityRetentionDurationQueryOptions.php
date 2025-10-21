<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRetentionDuration resources
 *
 * Available select fields:
 */
class SecurityRetentionDurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityRetentionDuration
     */

    /**
     * Select specific SecurityRetentionDuration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

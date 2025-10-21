<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityReviewSetSettings resources
 *
 * Available select fields:
 */
class SecurityReviewSetSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityReviewSetSettings
     */

    /**
     * Select specific SecurityReviewSetSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

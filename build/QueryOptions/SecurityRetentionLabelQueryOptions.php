<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRetentionLabel resources
 *
 * Available select fields:
 */
class SecurityRetentionLabelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityRetentionLabel
     */

    /**
     * Select specific SecurityRetentionLabel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

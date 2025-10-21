<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecureScoreControlProfile resources
 *
 * Available select fields:
 */
class SecureScoreControlProfileQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecureScoreControlProfile
     */

    /**
     * Select specific SecureScoreControlProfile properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

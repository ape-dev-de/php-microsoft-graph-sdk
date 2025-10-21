<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProcessIntegrityLevel resources
 *
 * Available select fields:
 */
class ProcessIntegrityLevelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProcessIntegrityLevel
     */

    /**
     * Select specific ProcessIntegrityLevel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

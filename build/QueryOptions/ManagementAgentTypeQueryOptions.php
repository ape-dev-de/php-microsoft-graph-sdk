<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagementAgentType resources
 *
 * Available select fields:
 */
class ManagementAgentTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagementAgentType
     */

    /**
     * Select specific ManagementAgentType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CopilotAdmin resources
 *
 * Available select fields:
 */
class CopilotAdminQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CopilotAdmin
     */

    /**
     * Select specific CopilotAdmin properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

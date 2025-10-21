<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CopilotAdminLimitedMode resources
 *
 * Available select fields:
 */
class CopilotAdminLimitedModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CopilotAdminLimitedMode
     */

    /**
     * Select specific CopilotAdminLimitedMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

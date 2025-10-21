<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationJobRestartScope resources
 *
 * Available select fields:
 */
class SynchronizationJobRestartScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationJobRestartScope
     */

    /**
     * Select specific SynchronizationJobRestartScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

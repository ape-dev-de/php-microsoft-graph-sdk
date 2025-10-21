<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationTaskExecutionResult resources
 *
 * Available select fields:
 */
class SynchronizationTaskExecutionResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationTaskExecutionResult
     */

    /**
     * Select specific SynchronizationTaskExecutionResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

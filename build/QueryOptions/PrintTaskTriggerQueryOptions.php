<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintTaskTrigger resources
 *
 * Available select fields:
 */
class PrintTaskTriggerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintTaskTrigger
     */

    /**
     * Select specific PrintTaskTrigger properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

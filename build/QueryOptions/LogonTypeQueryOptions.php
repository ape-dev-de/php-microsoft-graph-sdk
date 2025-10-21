<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LogonType resources
 *
 * Available select fields:
 */
class LogonTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LogonType
     */

    /**
     * Select specific LogonType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

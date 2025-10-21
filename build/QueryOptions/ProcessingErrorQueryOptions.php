<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProcessingError resources
 *
 * Available select fields:
 */
class ProcessingErrorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProcessingError
     */

    /**
     * Select specific ProcessingError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

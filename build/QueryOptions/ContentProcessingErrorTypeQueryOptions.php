<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContentProcessingErrorType resources
 *
 * Available select fields:
 */
class ContentProcessingErrorTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ContentProcessingErrorType
     */

    /**
     * Select specific ContentProcessingErrorType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

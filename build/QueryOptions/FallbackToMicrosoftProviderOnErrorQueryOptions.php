<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FallbackToMicrosoftProviderOnError resources
 *
 * Available select fields:
 */
class FallbackToMicrosoftProviderOnErrorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FallbackToMicrosoftProviderOnError
     */

    /**
     * Select specific FallbackToMicrosoftProviderOnError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnlineMeetingProviderType resources
 *
 * Available select fields:
 */
class OnlineMeetingProviderTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnlineMeetingProviderType
     */

    /**
     * Select specific OnlineMeetingProviderType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

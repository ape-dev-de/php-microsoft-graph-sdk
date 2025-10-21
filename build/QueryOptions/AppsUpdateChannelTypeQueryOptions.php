<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppsUpdateChannelType resources
 *
 * Available select fields:
 */
class AppsUpdateChannelTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppsUpdateChannelType
     */

    /**
     * Select specific AppsUpdateChannelType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

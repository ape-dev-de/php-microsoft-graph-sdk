<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VolumeType resources
 *
 * Available select fields:
 */
class VolumeTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VolumeType
     */

    /**
     * Select specific VolumeType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

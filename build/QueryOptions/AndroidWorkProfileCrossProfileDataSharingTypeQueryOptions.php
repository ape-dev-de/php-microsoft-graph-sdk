<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidWorkProfileCrossProfileDataSharingType resources
 *
 * Available select fields:
 */
class AndroidWorkProfileCrossProfileDataSharingTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidWorkProfileCrossProfileDataSharingType
     */

    /**
     * Select specific AndroidWorkProfileCrossProfileDataSharingType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

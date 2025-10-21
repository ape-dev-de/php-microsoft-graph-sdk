<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MdmAppConfigKeyType resources
 *
 * Available select fields:
 */
class MdmAppConfigKeyTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MdmAppConfigKeyType
     */

    /**
     * Select specific MdmAppConfigKeyType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

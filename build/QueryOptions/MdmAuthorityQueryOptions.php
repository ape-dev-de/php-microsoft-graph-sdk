<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MdmAuthority resources
 *
 * Available select fields:
 */
class MdmAuthorityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MdmAuthority
     */

    /**
     * Select specific MdmAuthority properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiUser resources
 *
 * Available select fields:
 */
class AiUserQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AiUser
     */

    /**
     * Select specific AiUser properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

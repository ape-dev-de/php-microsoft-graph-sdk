<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkBot resources
 *
 * Available select fields:
 */
class TeamworkBotQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamworkBot
     */

    /**
     * Select specific TeamworkBot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

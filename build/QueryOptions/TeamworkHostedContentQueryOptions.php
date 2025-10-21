<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkHostedContent resources
 *
 * Available select fields:
 */
class TeamworkHostedContentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamworkHostedContent
     */

    /**
     * Select specific TeamworkHostedContent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

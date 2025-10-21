<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkActivityTopicSource resources
 *
 * Available select fields:
 */
class TeamworkActivityTopicSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamworkActivityTopicSource
     */

    /**
     * Select specific TeamworkActivityTopicSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

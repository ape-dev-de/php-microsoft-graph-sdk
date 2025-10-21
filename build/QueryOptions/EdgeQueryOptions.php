<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Edge resources
 *
 * Available select fields:
 * - internetExplorerMode
 */
class EdgeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Edge
     */
    public const FIELD_INTERNET_EXPLORER_MODE = 'internetExplorerMode';

    /**
     * Select specific Edge properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

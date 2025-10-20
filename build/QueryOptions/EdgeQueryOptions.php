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
    public const FIELD_INTERNET_EXPLORER_MODE = 'internetExplorerMode';

    /**
     * Select specific Edge properties
     * 
     * @param array<string> $select Use EdgeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

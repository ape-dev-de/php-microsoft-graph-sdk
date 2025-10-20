<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EdgeSearchEngine resources
 *
 * Available select fields:
 * - edgeSearchEngineType
 */
class EdgeSearchEngineQueryOptions extends QueryOptions
{
    public const FIELD_EDGE_SEARCH_ENGINE_TYPE = 'edgeSearchEngineType';

    /**
     * Select specific EdgeSearchEngine properties
     * 
     * @param array<string> $select Use EdgeSearchEngineQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

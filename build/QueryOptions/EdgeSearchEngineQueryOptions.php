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
    /**
     * Available select fields for EdgeSearchEngine
     */
    public const FIELD_EDGE_SEARCH_ENGINE_TYPE = 'edgeSearchEngineType';

    /**
     * Select specific EdgeSearchEngine properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

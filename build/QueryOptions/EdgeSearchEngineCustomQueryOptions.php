<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EdgeSearchEngineCustom resources
 *
 * Available select fields:
 * - edgeSearchEngineOpenSearchXmlUrl
 */
class EdgeSearchEngineCustomQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EdgeSearchEngineCustom
     */
    public const FIELD_EDGE_SEARCH_ENGINE_OPEN_SEARCH_XML_URL = 'edgeSearchEngineOpenSearchXmlUrl';

    /**
     * Select specific EdgeSearchEngineCustom properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

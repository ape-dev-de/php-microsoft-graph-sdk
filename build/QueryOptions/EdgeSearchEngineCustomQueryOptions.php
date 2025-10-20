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
    public const FIELD_EDGE_SEARCH_ENGINE_OPEN_SEARCH_XML_URL = 'edgeSearchEngineOpenSearchXmlUrl';

    /**
     * Select specific EdgeSearchEngineCustom properties
     * 
     * @param array<string> $select Use EdgeSearchEngineCustomQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

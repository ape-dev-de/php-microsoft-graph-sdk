<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchResponse
 */
class SearchResponse
{
    /** 
     * A collection of search results.
     * @var SearchHitsContainer[]
     */
    public array $hitsContainers = [];

    /** 
     * Provides information related to spelling corrections in the alteration response.
     * @var AlterationResponse|\stdClass|null
     */
    public mixed $queryAlterationResponse = null;

    /** 
     * A dictionary of resultTemplateIds and associated values, which include the name and JSON schema of the result templates.
     * @var ResultTemplateDictionary|\stdClass|null
     */
    public mixed $resultTemplates = null;

    /** 
     * Contains the search terms sent in the initial search query.
     * @var string[]
     */
    public array $searchTerms = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['hitsContainers'])) {
            $this->hitsContainers = $data['hitsContainers'];
        }
        if (isset($data['queryAlterationResponse'])) {
            $this->queryAlterationResponse = is_array($data['queryAlterationResponse']) ? new AlterationResponse($data['queryAlterationResponse']) : $data['queryAlterationResponse'];
        }
        if (isset($data['resultTemplates'])) {
            $this->resultTemplates = is_array($data['resultTemplates']) ? new ResultTemplateDictionary($data['resultTemplates']) : $data['resultTemplates'];
        }
        if (isset($data['searchTerms'])) {
            $this->searchTerms = $data['searchTerms'];
        }
    }
}

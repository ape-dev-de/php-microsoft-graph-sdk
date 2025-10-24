<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Search;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SearchEntity;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Search\Search\AcronymsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Search\Search\BookmarksRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Search\Search\QueryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Search\Search\QnasRequestBuilder;

/**
 * Request builder for /search
 */
class SearchRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get search
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SearchEntity
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SearchEntity
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to SearchEntity
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new SearchEntity($data);
    }
    /**
     * Update search
     * @param SearchEntity $body Request body
     * @return SearchEntity
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SearchEntity $body): SearchEntity
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SearchEntity
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new SearchEntity($data);
    }
    /**
     * Navigate to acronyms
     *
     * @return AcronymsRequestBuilder
     */
    public function acronyms(): AcronymsRequestBuilder
    {
        return new AcronymsRequestBuilder($this->client, $this->requestUrl . '/acronyms');
    }
    /**
     * Navigate to bookmarks
     *
     * @return BookmarksRequestBuilder
     */
    public function bookmarks(): BookmarksRequestBuilder
    {
        return new BookmarksRequestBuilder($this->client, $this->requestUrl . '/bookmarks');
    }
    /**
     * Navigate to query
     *
     * @return QueryRequestBuilder
     */
    public function query(): QueryRequestBuilder
    {
        return new QueryRequestBuilder($this->client, $this->requestUrl . '/query');
    }
    /**
     * Navigate to qnas
     *
     * @return QnasRequestBuilder
     */
    public function qnas(): QnasRequestBuilder
    {
        return new QnasRequestBuilder($this->client, $this->requestUrl . '/qnas');
    }
}

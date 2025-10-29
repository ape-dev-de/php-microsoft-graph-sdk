<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\BaseSitePageCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\BaseSitePage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Pages\BaseSitePageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Pages\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Pages\GraphSitePageRequestBuilder;

/**
 * Request builder for /sites/{site-id}/pages
 */
class PagesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List baseSitePages
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return BaseSitePageCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): BaseSitePageCollectionResponse
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count ? 'true' : 'false';
        }
        if ($orderby !== null && $orderby !== []) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to BaseSitePageCollectionResponse
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
        
        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new BaseSitePage($item);
        }
        $collection = new BaseSitePageCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create a page in the site pages list of a site
     * @param BaseSitePage $body Request body
     * @return BaseSitePage
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(BaseSitePage $body): BaseSitePage
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to BaseSitePage
     */
    private function deserializePost(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new BaseSitePage($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $baseSitePageId The item ID
     * @return BaseSitePageRequestBuilder
     */
    public function byId(string $baseSitePageId): BaseSitePageRequestBuilder
    {
        return new BaseSitePageRequestBuilder($this->client, $this->requestUrl . '/' . $baseSitePageId);
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
    /**
     * Navigate to graph.sitePage
     *
     * @return GraphSitePageRequestBuilder
     */
    public function graphSitePage(): GraphSitePageRequestBuilder
    {
        return new GraphSitePageRequestBuilder($this->client, $this->requestUrl . '/graph.sitePage');
    }
}

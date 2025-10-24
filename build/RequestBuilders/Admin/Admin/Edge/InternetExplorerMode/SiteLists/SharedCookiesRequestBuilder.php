<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\Admin\Edge\InternetExplorerMode\SiteLists;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\BrowserSharedCookieCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\BrowserSharedCookie;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\Admin\Edge\InternetExplorerMode\SiteLists\SharedCookies\BrowserSharedCookieRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\Admin\Edge\InternetExplorerMode\SiteLists\SharedCookies\CountRequestBuilder;

/**
 * Request builder for /admin/edge/internetExplorerMode/siteLists/{browserSiteList-id}/sharedCookies
 */
class SharedCookiesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List browserSharedCookies
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return BrowserSharedCookieCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): BrowserSharedCookieCollectionResponse
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
     * Deserialize response to BrowserSharedCookieCollectionResponse
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
            $items[] = new BrowserSharedCookie($item);
        }
        $collection = new BrowserSharedCookieCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create browserSharedCookie
     * @param BrowserSharedCookie $body Request body
     * @return BrowserSharedCookie
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(BrowserSharedCookie $body): BrowserSharedCookie
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to BrowserSharedCookie
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
        return new BrowserSharedCookie($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $browserSharedCookieId The item ID
     * @return BrowserSharedCookieRequestBuilder
     */
    public function byId(string $browserSharedCookieId): BrowserSharedCookieRequestBuilder
    {
        return new BrowserSharedCookieRequestBuilder($this->client, $this->requestUrl . '/' . $browserSharedCookieId);
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
}

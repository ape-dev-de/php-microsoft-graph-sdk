<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\Edge\InternetExplorerMode\SiteLists;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\BrowserSiteList;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\Edge\InternetExplorerMode\SiteLists\PublishRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\Edge\InternetExplorerMode\SiteLists\SharedCookiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\Edge\InternetExplorerMode\SiteLists\SitesRequestBuilder;

/**
 * Request builder for /admin/edge/internetExplorerMode/siteLists/{browserSiteList-id}
 */
class BrowserSiteListRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get browserSiteList
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return BrowserSiteList|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): BrowserSiteList|null
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
     * Deserialize response to BrowserSiteList|null
     */
    private function deserializeGet(string $body): BrowserSiteList|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new BrowserSiteList($data);
    }
    /**
     * Update browserSiteList
     * @param BrowserSiteList $body Request body
     * @return BrowserSiteList|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(BrowserSiteList $body): BrowserSiteList|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to BrowserSiteList|null
     */
    private function deserializePatch(string $body): BrowserSiteList|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new BrowserSiteList($data);
    }
    /**
     * Delete browserSiteList
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return $data;
    }
    /**
     * Navigate to publish
     *
     * @return PublishRequestBuilder
     */
    public function publish(): PublishRequestBuilder
    {
        return new PublishRequestBuilder($this->client, $this->requestUrl . '/publish');
    }
    /**
     * Navigate to sharedCookies
     *
     * @return SharedCookiesRequestBuilder
     */
    public function sharedCookies(): SharedCookiesRequestBuilder
    {
        return new SharedCookiesRequestBuilder($this->client, $this->requestUrl . '/sharedCookies');
    }
    /**
     * Navigate to sites
     *
     * @return SitesRequestBuilder
     */
    public function sites(): SitesRequestBuilder
    {
        return new SitesRequestBuilder($this->client, $this->requestUrl . '/sites');
    }
}

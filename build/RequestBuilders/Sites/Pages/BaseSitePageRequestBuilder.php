<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Pages;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\BaseSitePage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Pages\CreatedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Pages\LastModifiedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Pages\GraphSitePageRequestBuilder;

/**
 * Request builder for /sites/{site-id}/pages/{baseSitePage-id}
 */
class BaseSitePageRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get baseSitePage
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return BaseSitePage|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): BaseSitePage|null
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
     * Deserialize response to BaseSitePage|null
     */
    private function deserializeGet(string $body): BaseSitePage|null    {
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
     * Update the navigation property pages in sites
     * @param BaseSitePage $body Request body
     * @return BaseSitePage|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(BaseSitePage $body): BaseSitePage|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to BaseSitePage|null
     */
    private function deserializePatch(string $body): BaseSitePage|null    {
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
     * Delete baseSitePage
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
     * Navigate to createdByUser
     *
     * @return CreatedByUserRequestBuilder
     */
    public function createdByUser(): CreatedByUserRequestBuilder
    {
        return new CreatedByUserRequestBuilder($this->client, $this->requestUrl . '/createdByUser');
    }
    /**
     * Navigate to lastModifiedByUser
     *
     * @return LastModifiedByUserRequestBuilder
     */
    public function lastModifiedByUser(): LastModifiedByUserRequestBuilder
    {
        return new LastModifiedByUserRequestBuilder($this->client, $this->requestUrl . '/lastModifiedByUser');
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

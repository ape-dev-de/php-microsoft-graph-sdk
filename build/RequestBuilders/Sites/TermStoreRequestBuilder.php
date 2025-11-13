<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreStore;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\TermStore\GroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\TermStore\SetsRequestBuilder;

/**
 * Request builder for /sites/{site-id}/termStore
 */
class TermStoreRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get store
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TermStoreStore|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TermStoreStore|null
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
     * Deserialize response to TermStoreStore|null
     */
    private function deserializeGet(string $body): TermStoreStore|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new TermStoreStore($data);
    }
    /**
     * Update store
     * @param TermStoreStore $body Request body
     * @return TermStoreStore|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TermStoreStore $body): TermStoreStore|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TermStoreStore|null
     */
    private function deserializePatch(string $body): TermStoreStore|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new TermStoreStore($data);
    }
    /**
     * Delete navigation property termStore for sites
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
     * Navigate to groups
     *
     * @return GroupsRequestBuilder
     */
    public function groups(): GroupsRequestBuilder
    {
        return new GroupsRequestBuilder($this->client, $this->requestUrl . '/groups');
    }
    /**
     * Navigate to sets
     *
     * @return SetsRequestBuilder
     */
    public function sets(): SetsRequestBuilder
    {
        return new SetsRequestBuilder($this->client, $this->requestUrl . '/sets');
    }
}

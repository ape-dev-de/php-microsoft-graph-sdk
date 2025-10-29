<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\TermStores\Sets\ParentGroup\Sets;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreSet;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\TermStores\Sets\ParentGroup\Sets\ChildrenRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\TermStores\Sets\ParentGroup\Sets\RelationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\TermStores\Sets\ParentGroup\Sets\TermsRequestBuilder;

/**
 * Request builder for /sites/{site-id}/termStores/{store-id}/sets/{set-id}/parentGroup/sets/{set-id1}
 */
class SetRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get sets from sites
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TermStoreSet
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TermStoreSet
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
     * Deserialize response to TermStoreSet
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
        return new TermStoreSet($data);
    }
    /**
     * Update the navigation property sets in sites
     * @param TermStoreSet $body Request body
     * @return TermStoreSet
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TermStoreSet $body): TermStoreSet
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TermStoreSet
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
        return new TermStoreSet($data);
    }
    /**
     * Delete navigation property sets for sites
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
    private function deserializeDelete(string $body): mixed
    {
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
     * Navigate to children
     *
     * @return ChildrenRequestBuilder
     */
    public function children(): ChildrenRequestBuilder
    {
        return new ChildrenRequestBuilder($this->client, $this->requestUrl . '/children');
    }
    /**
     * Navigate to relations
     *
     * @return RelationsRequestBuilder
     */
    public function relations(): RelationsRequestBuilder
    {
        return new RelationsRequestBuilder($this->client, $this->requestUrl . '/relations');
    }
    /**
     * Navigate to terms
     *
     * @return TermsRequestBuilder
     */
    public function terms(): TermsRequestBuilder
    {
        return new TermsRequestBuilder($this->client, $this->requestUrl . '/terms');
    }
}

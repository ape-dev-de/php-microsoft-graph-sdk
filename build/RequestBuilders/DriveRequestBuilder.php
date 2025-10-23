<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Drive;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BundlesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CreatedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\FollowingRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ItemsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\LastModifiedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ListRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RecentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SearchRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SharedWithMeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RootRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SpecialRequestBuilder;

/**
 * Request builder for {drive-id}
 */
class DriveRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get entity from drives by key
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Drive
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Drive
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to Drive
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
        return new Drive($data);
    }
    /**
     * Update entity in drives
     * @param Drive $body Request body
     * @return Drive
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Drive $body): Drive
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Drive
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
        return new Drive($data);
    }
    /**
     * Delete entity from drives
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null) {
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
     * Navigate to bundles
     *
     * @return BundlesRequestBuilder
     */
    public function bundles(): BundlesRequestBuilder
    {
        return new BundlesRequestBuilder($this->client, $this->requestUrl . '/bundles');
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
     * Navigate to following
     *
     * @return FollowingRequestBuilder
     */
    public function following(): FollowingRequestBuilder
    {
        return new FollowingRequestBuilder($this->client, $this->requestUrl . '/following');
    }
    /**
     * Navigate to items
     *
     * @return ItemsRequestBuilder
     */
    public function items(): ItemsRequestBuilder
    {
        return new ItemsRequestBuilder($this->client, $this->requestUrl . '/items');
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
     * Navigate to list
     *
     * @return ListRequestBuilder
     */
    public function list(): ListRequestBuilder
    {
        return new ListRequestBuilder($this->client, $this->requestUrl . '/list');
    }
    /**
     * Navigate to recent()
     *
     * @return RecentRequestBuilder
     */
    public function recent(): RecentRequestBuilder
    {
        return new RecentRequestBuilder($this->client, $this->requestUrl . '/recent()');
    }
    /**
     * Navigate to sharedWithMe()
     *
     * @return SharedWithMeRequestBuilder
     */
    public function sharedWithMe(): SharedWithMeRequestBuilder
    {
        return new SharedWithMeRequestBuilder($this->client, $this->requestUrl . '/sharedWithMe()');
    }
    /**
     * Navigate to root
     *
     * @return RootRequestBuilder
     */
    public function root(): RootRequestBuilder
    {
        return new RootRequestBuilder($this->client, $this->requestUrl . '/root');
    }
    /**
     * Navigate to special
     *
     * @return SpecialRequestBuilder
     */
    public function special(): SpecialRequestBuilder
    {
        return new SpecialRequestBuilder($this->client, $this->requestUrl . '/special');
    }
}

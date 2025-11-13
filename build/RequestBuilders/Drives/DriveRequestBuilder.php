<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Drive;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\BundlesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\CreatedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\FollowingRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\ItemsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\LastModifiedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\ListModelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\RecentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\SearchRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\SharedWithMeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\RootRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\SpecialRequestBuilder;

/**
 * Request builder for /drives/{drive-id}
 */
class DriveRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get entity from drives by key
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Drive|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Drive|null
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
     * Deserialize response to Drive|null
     */
    private function deserializeGet(string $body): Drive|null    {
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
     * @return Drive|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Drive $body): Drive|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Drive|null
     */
    private function deserializePatch(string $body): Drive|null    {
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
     * @return ListModelRequestBuilder
     */
    public function listModel(): ListModelRequestBuilder
    {
        return new ListModelRequestBuilder($this->client, $this->requestUrl . '/list');
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

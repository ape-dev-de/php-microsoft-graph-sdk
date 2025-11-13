<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\TermStores\Groups\Sets\Children;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreTerm;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\TermStores\Groups\Sets\Children\ChildrenRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\TermStores\Groups\Sets\Children\RelationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\TermStores\Groups\Sets\Children\SetRequestBuilder;

/**
 * Request builder for /sites/{site-id}/termStores/{store-id}/groups/{group-id}/sets/{set-id}/children/{term-id}
 */
class TermRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get children from sites
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TermStoreTerm|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TermStoreTerm|null
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
     * Deserialize response to TermStoreTerm|null
     */
    private function deserializeGet(string $body): TermStoreTerm|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new TermStoreTerm($data);
    }
    /**
     * Update the navigation property children in sites
     * @param TermStoreTerm $body Request body
     * @return TermStoreTerm|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TermStoreTerm $body): TermStoreTerm|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TermStoreTerm|null
     */
    private function deserializePatch(string $body): TermStoreTerm|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new TermStoreTerm($data);
    }
    /**
     * Delete navigation property children for sites
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
     * Navigate to set
     *
     * @return SetRequestBuilder
     */
    public function set(): SetRequestBuilder
    {
        return new SetRequestBuilder($this->client, $this->requestUrl . '/set');
    }
}

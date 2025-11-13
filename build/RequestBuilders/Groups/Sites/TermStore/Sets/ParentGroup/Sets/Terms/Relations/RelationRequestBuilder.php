<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\TermStore\Sets\ParentGroup\Sets\Terms\Relations;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreRelation;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\TermStore\Sets\ParentGroup\Sets\Terms\Relations\FromTermRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\TermStore\Sets\ParentGroup\Sets\Terms\Relations\SetRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\TermStore\Sets\ParentGroup\Sets\Terms\Relations\ToTermRequestBuilder;

/**
 * Request builder for /groups/{group-id}/sites/{site-id}/termStore/sets/{set-id}/parentGroup/sets/{set-id1}/terms/{term-id}/relations/{relation-id}
 */
class RelationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get relations from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TermStoreRelation|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TermStoreRelation|null
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
     * Deserialize response to TermStoreRelation|null
     */
    private function deserializeGet(string $body): TermStoreRelation|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new TermStoreRelation($data);
    }
    /**
     * Update the navigation property relations in groups
     * @param TermStoreRelation $body Request body
     * @return TermStoreRelation|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TermStoreRelation $body): TermStoreRelation|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TermStoreRelation|null
     */
    private function deserializePatch(string $body): TermStoreRelation|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new TermStoreRelation($data);
    }
    /**
     * Delete navigation property relations for groups
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
     * Navigate to fromTerm
     *
     * @return FromTermRequestBuilder
     */
    public function fromTerm(): FromTermRequestBuilder
    {
        return new FromTermRequestBuilder($this->client, $this->requestUrl . '/fromTerm');
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
    /**
     * Navigate to toTerm
     *
     * @return ToTermRequestBuilder
     */
    public function toTerm(): ToTermRequestBuilder
    {
        return new ToTermRequestBuilder($this->client, $this->requestUrl . '/toTerm');
    }
}

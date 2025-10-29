<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\TermStore\Sets\Terms\Relations;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreRelation;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\TermStore\Sets\Terms\Relations\FromTermRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\TermStore\Sets\Terms\Relations\SetRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\TermStore\Sets\Terms\Relations\ToTermRequestBuilder;

/**
 * Request builder for /sites/{site-id}/termStore/sets/{set-id}/terms/{term-id}/relations/{relation-id}
 */
class RelationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get relations from sites
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TermStoreRelation
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TermStoreRelation
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
     * Deserialize response to TermStoreRelation
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
        return new TermStoreRelation($data);
    }
    /**
     * Update the navigation property relations in sites
     * @param TermStoreRelation $body Request body
     * @return TermStoreRelation
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TermStoreRelation $body): TermStoreRelation
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TermStoreRelation
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
        return new TermStoreRelation($data);
    }
    /**
     * Delete navigation property relations for sites
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

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\TermStore\Sets\Terms;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreTerm;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\TermStore\Sets\Terms\ChildrenRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\TermStore\Sets\Terms\RelationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\TermStore\Sets\Terms\SetRequestBuilder;

/**
 * Request builder for /groups/{group-id}/sites/{site-id}/termStore/groups/{group-id1}/sets/{set-id}/terms/{term-id}
 */
class TermRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get terms from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TermStoreTerm
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TermStoreTerm
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
     * Deserialize response to TermStoreTerm
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
        return new TermStoreTerm($data);
    }
    /**
     * Update the navigation property terms in groups
     * @param TermStoreTerm $body Request body
     * @return TermStoreTerm
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TermStoreTerm $body): TermStoreTerm
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TermStoreTerm
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
        return new TermStoreTerm($data);
    }
    /**
     * Delete navigation property terms for groups
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
     * Navigate to set
     *
     * @return SetRequestBuilder
     */
    public function set(): SetRequestBuilder
    {
        return new SetRequestBuilder($this->client, $this->requestUrl . '/set');
    }
}

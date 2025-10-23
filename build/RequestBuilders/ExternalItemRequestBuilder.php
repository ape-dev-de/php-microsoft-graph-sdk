<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsExternalItem;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ActivitiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ExternalConnectorsAddActivitiesRequestBuilder;

/**
 * Request builder for {externalItem-id}
 */
class ExternalItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get items from connections
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ExternalConnectorsExternalItem
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ExternalConnectorsExternalItem
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to ExternalConnectorsExternalItem
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
        return new ExternalConnectorsExternalItem($data);
    }
    /**
     * Update the navigation property items in connections
     * @param ExternalConnectorsExternalItem $body Request body
     * @return ExternalConnectorsExternalItem
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function put(ExternalConnectorsExternalItem $body): ExternalConnectorsExternalItem
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->put($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePut($responseBody);
    }

    /**
     * Deserialize response to ExternalConnectorsExternalItem
     */
    private function deserializePut(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new ExternalConnectorsExternalItem($data);
    }
    /**
     * Delete navigation property items for connections
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
     * Navigate to activities
     *
     * @return ActivitiesRequestBuilder
     */
    public function activities(): ActivitiesRequestBuilder
    {
        return new ActivitiesRequestBuilder($this->client, $this->requestUrl . '/activities');
    }
    /**
     * Navigate to microsoft.graph.externalConnectors.addActivities
     *
     * @return ExternalConnectorsAddActivitiesRequestBuilder
     */
    public function externalConnectorsAddActivities(): ExternalConnectorsAddActivitiesRequestBuilder
    {
        return new ExternalConnectorsAddActivitiesRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.externalConnectors.addActivities');
    }
}

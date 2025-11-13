<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\External\Connections;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsExternalConnection;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\External\Connections\GroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\External\Connections\ItemsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\External\Connections\OperationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\External\Connections\SchemaRequestBuilder;

/**
 * Request builder for /external/connections/{externalConnection-id}
 */
class ExternalConnectionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get externalConnection
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ExternalConnectorsExternalConnection|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ExternalConnectorsExternalConnection|null
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
     * Deserialize response to ExternalConnectorsExternalConnection|null
     */
    private function deserializeGet(string $body): ExternalConnectorsExternalConnection|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ExternalConnectorsExternalConnection($data);
    }
    /**
     * Update externalConnection
     * @param ExternalConnectorsExternalConnection $body Request body
     * @return ExternalConnectorsExternalConnection|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ExternalConnectorsExternalConnection $body): ExternalConnectorsExternalConnection|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ExternalConnectorsExternalConnection|null
     */
    private function deserializePatch(string $body): ExternalConnectorsExternalConnection|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ExternalConnectorsExternalConnection($data);
    }
    /**
     * Delete externalConnection
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
     * Navigate to items
     *
     * @return ItemsRequestBuilder
     */
    public function items(): ItemsRequestBuilder
    {
        return new ItemsRequestBuilder($this->client, $this->requestUrl . '/items');
    }
    /**
     * Navigate to operations
     *
     * @return OperationsRequestBuilder
     */
    public function operations(): OperationsRequestBuilder
    {
        return new OperationsRequestBuilder($this->client, $this->requestUrl . '/operations');
    }
    /**
     * Navigate to schema
     *
     * @return SchemaRequestBuilder
     */
    public function schema(): SchemaRequestBuilder
    {
        return new SchemaRequestBuilder($this->client, $this->requestUrl . '/schema');
    }
}

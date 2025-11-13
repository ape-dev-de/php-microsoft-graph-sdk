<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\External;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsExternal;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\External\ConnectionsRequestBuilder;

/**
 * Request builder for /external
 */
class ExternalRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get external
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ExternalConnectorsExternal|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ExternalConnectorsExternal|null
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
     * Deserialize response to ExternalConnectorsExternal|null
     */
    private function deserializeGet(string $body): ExternalConnectorsExternal|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ExternalConnectorsExternal($data);
    }
    /**
     * Update external
     * @param ExternalConnectorsExternal $body Request body
     * @return ExternalConnectorsExternal|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ExternalConnectorsExternal $body): ExternalConnectorsExternal|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ExternalConnectorsExternal|null
     */
    private function deserializePatch(string $body): ExternalConnectorsExternal|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ExternalConnectorsExternal($data);
    }
    /**
     * Navigate to connections
     *
     * @return ConnectionsRequestBuilder
     */
    public function connections(): ConnectionsRequestBuilder
    {
        return new ConnectionsRequestBuilder($this->client, $this->requestUrl . '/connections');
    }
}

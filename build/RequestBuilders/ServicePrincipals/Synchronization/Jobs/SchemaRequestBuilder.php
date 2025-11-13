<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Synchronization\Jobs;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SynchronizationSchema;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Synchronization\Jobs\Schema\DirectoriesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Synchronization\Jobs\Schema\FilterOperatorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Synchronization\Jobs\Schema\FunctionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Synchronization\Jobs\Schema\ParseExpressionRequestBuilder;

/**
 * Request builder for /servicePrincipals/{servicePrincipal-id}/synchronization/jobs/{synchronizationJob-id}/schema
 */
class SchemaRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get synchronizationSchema
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SynchronizationSchema|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SynchronizationSchema|null
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
     * Deserialize response to SynchronizationSchema|null
     */
    private function deserializeGet(string $body): SynchronizationSchema|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SynchronizationSchema($data);
    }
    /**
     * Update synchronizationSchema
     * @param SynchronizationSchema $body Request body
     * @return SynchronizationSchema|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SynchronizationSchema $body): SynchronizationSchema|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SynchronizationSchema|null
     */
    private function deserializePatch(string $body): SynchronizationSchema|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SynchronizationSchema($data);
    }
    /**
     * Delete navigation property schema for servicePrincipals
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
     * Navigate to directories
     *
     * @return DirectoriesRequestBuilder
     */
    public function directories(): DirectoriesRequestBuilder
    {
        return new DirectoriesRequestBuilder($this->client, $this->requestUrl . '/directories');
    }
    /**
     * Navigate to filterOperators()
     *
     * @return FilterOperatorsRequestBuilder
     */
    public function filterOperators(): FilterOperatorsRequestBuilder
    {
        return new FilterOperatorsRequestBuilder($this->client, $this->requestUrl . '/filterOperators()');
    }
    /**
     * Navigate to functions()
     *
     * @return FunctionsRequestBuilder
     */
    public function functions(): FunctionsRequestBuilder
    {
        return new FunctionsRequestBuilder($this->client, $this->requestUrl . '/functions()');
    }
    /**
     * Navigate to parseExpression
     *
     * @return ParseExpressionRequestBuilder
     */
    public function parseExpression(): ParseExpressionRequestBuilder
    {
        return new ParseExpressionRequestBuilder($this->client, $this->requestUrl . '/parseExpression');
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\Synchronization\Jobs;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SynchronizationSchema;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\Synchronization\Jobs\Schema\DirectoriesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\Synchronization\Jobs\Schema\FilterOperatorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\Synchronization\Jobs\Schema\FunctionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\Synchronization\Jobs\Schema\ParseExpressionRequestBuilder;

/**
 * Request builder for /applications/{application-id}/synchronization/jobs/{synchronizationJob-id}/schema
 */
class SchemaRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get schema from applications
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SynchronizationSchema
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SynchronizationSchema
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
     * Deserialize response to SynchronizationSchema
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
        return new SynchronizationSchema($data);
    }
    /**
     * Update the navigation property schema in applications
     * @param SynchronizationSchema $body Request body
     * @return SynchronizationSchema
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SynchronizationSchema $body): SynchronizationSchema
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SynchronizationSchema
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
        return new SynchronizationSchema($data);
    }
    /**
     * Delete navigation property schema for applications
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

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Synchronization;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\Synchronization\JobsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\Synchronization\AcquireAccessTokenRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\Synchronization\SecretsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\Synchronization\TemplatesRequestBuilder;

/**
 * Request builder for /applications/{application-id}/synchronization
 */
class SynchronizationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get synchronization from applications
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Synchronization
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Synchronization
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
     * Deserialize response to Synchronization
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
        return new Synchronization($data);
    }
    /**
     * Update the navigation property synchronization in applications
     * @param Synchronization $body Request body
     * @return Synchronization
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function put(Synchronization $body): Synchronization
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->put($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePut($responseBody);
    }

    /**
     * Deserialize response to Synchronization
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
        return new Synchronization($data);
    }
    /**
     * Delete navigation property synchronization for applications
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
     * Navigate to jobs
     *
     * @return JobsRequestBuilder
     */
    public function jobs(): JobsRequestBuilder
    {
        return new JobsRequestBuilder($this->client, $this->requestUrl . '/jobs');
    }
    /**
     * Navigate to acquireAccessToken
     *
     * @return AcquireAccessTokenRequestBuilder
     */
    public function acquireAccessToken(): AcquireAccessTokenRequestBuilder
    {
        return new AcquireAccessTokenRequestBuilder($this->client, $this->requestUrl . '/acquireAccessToken');
    }
    /**
     * Navigate to secrets
     *
     * @return SecretsRequestBuilder
     */
    public function secrets(): SecretsRequestBuilder
    {
        return new SecretsRequestBuilder($this->client, $this->requestUrl . '/secrets');
    }
    /**
     * Navigate to templates
     *
     * @return TemplatesRequestBuilder
     */
    public function templates(): TemplatesRequestBuilder
    {
        return new TemplatesRequestBuilder($this->client, $this->requestUrl . '/templates');
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SynchronizationJob;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BulkUploadRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PauseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ProvisionOnDemandRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RestartRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\StartRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ValidateCredentialsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SchemaRequestBuilder;

/**
 * Request builder for {synchronizationJob-id}
 */
class SynchronizationJobRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get jobs from applications
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SynchronizationJob
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SynchronizationJob
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
     * Deserialize response to SynchronizationJob
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
        return new SynchronizationJob($data);
    }
    /**
     * Update the navigation property jobs in applications
     * @param SynchronizationJob $body Request body
     * @return SynchronizationJob
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SynchronizationJob $body): SynchronizationJob
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SynchronizationJob
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
        return new SynchronizationJob($data);
    }
    /**
     * Delete navigation property jobs for applications
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
     * Navigate to bulkUpload
     *
     * @return BulkUploadRequestBuilder
     */
    public function bulkUpload(): BulkUploadRequestBuilder
    {
        return new BulkUploadRequestBuilder($this->client, $this->requestUrl . '/bulkUpload');
    }
    /**
     * Navigate to pause
     *
     * @return PauseRequestBuilder
     */
    public function pause(): PauseRequestBuilder
    {
        return new PauseRequestBuilder($this->client, $this->requestUrl . '/pause');
    }
    /**
     * Navigate to provisionOnDemand
     *
     * @return ProvisionOnDemandRequestBuilder
     */
    public function provisionOnDemand(): ProvisionOnDemandRequestBuilder
    {
        return new ProvisionOnDemandRequestBuilder($this->client, $this->requestUrl . '/provisionOnDemand');
    }
    /**
     * Navigate to restart
     *
     * @return RestartRequestBuilder
     */
    public function restart(): RestartRequestBuilder
    {
        return new RestartRequestBuilder($this->client, $this->requestUrl . '/restart');
    }
    /**
     * Navigate to start
     *
     * @return StartRequestBuilder
     */
    public function start(): StartRequestBuilder
    {
        return new StartRequestBuilder($this->client, $this->requestUrl . '/start');
    }
    /**
     * Navigate to validateCredentials
     *
     * @return ValidateCredentialsRequestBuilder
     */
    public function validateCredentials(): ValidateCredentialsRequestBuilder
    {
        return new ValidateCredentialsRequestBuilder($this->client, $this->requestUrl . '/validateCredentials');
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

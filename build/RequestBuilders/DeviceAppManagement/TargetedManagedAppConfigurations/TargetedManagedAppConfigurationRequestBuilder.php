<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\TargetedManagedAppConfigurations;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TargetedManagedAppConfiguration;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\TargetedManagedAppConfigurations\AppsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\TargetedManagedAppConfigurations\AssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\TargetedManagedAppConfigurations\DeploymentSummaryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\TargetedManagedAppConfigurations\AssignRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\TargetedManagedAppConfigurations\TargetAppsRequestBuilder;

/**
 * Request builder for /deviceAppManagement/targetedManagedAppConfigurations/{targetedManagedAppConfiguration-id}
 */
class TargetedManagedAppConfigurationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get targetedManagedAppConfiguration
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TargetedManagedAppConfiguration
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TargetedManagedAppConfiguration
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
     * Deserialize response to TargetedManagedAppConfiguration
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
        return new TargetedManagedAppConfiguration($data);
    }
    /**
     * Update targetedManagedAppConfiguration
     * @param TargetedManagedAppConfiguration $body Request body
     * @return TargetedManagedAppConfiguration
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TargetedManagedAppConfiguration $body): TargetedManagedAppConfiguration
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TargetedManagedAppConfiguration
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
        return new TargetedManagedAppConfiguration($data);
    }
    /**
     * Delete targetedManagedAppConfiguration
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
     * Navigate to apps
     *
     * @return AppsRequestBuilder
     */
    public function apps(): AppsRequestBuilder
    {
        return new AppsRequestBuilder($this->client, $this->requestUrl . '/apps');
    }
    /**
     * Navigate to assignments
     *
     * @return AssignmentsRequestBuilder
     */
    public function assignments(): AssignmentsRequestBuilder
    {
        return new AssignmentsRequestBuilder($this->client, $this->requestUrl . '/assignments');
    }
    /**
     * Navigate to deploymentSummary
     *
     * @return DeploymentSummaryRequestBuilder
     */
    public function deploymentSummary(): DeploymentSummaryRequestBuilder
    {
        return new DeploymentSummaryRequestBuilder($this->client, $this->requestUrl . '/deploymentSummary');
    }
    /**
     * Navigate to assign
     *
     * @return AssignRequestBuilder
     */
    public function assign(): AssignRequestBuilder
    {
        return new AssignRequestBuilder($this->client, $this->requestUrl . '/assign');
    }
    /**
     * Navigate to targetApps
     *
     * @return TargetAppsRequestBuilder
     */
    public function targetApps(): TargetAppsRequestBuilder
    {
        return new TargetAppsRequestBuilder($this->client, $this->requestUrl . '/targetApps');
    }
}

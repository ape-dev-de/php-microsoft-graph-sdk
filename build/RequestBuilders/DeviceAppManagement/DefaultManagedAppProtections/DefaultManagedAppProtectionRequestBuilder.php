<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DefaultManagedAppProtections;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DefaultManagedAppProtection;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DefaultManagedAppProtections\AppsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DefaultManagedAppProtections\DeploymentSummaryRequestBuilder;

/**
 * Request builder for /deviceAppManagement/defaultManagedAppProtections/{defaultManagedAppProtection-id}
 */
class DefaultManagedAppProtectionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get defaultManagedAppProtection
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return DefaultManagedAppProtection|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): DefaultManagedAppProtection|null
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
     * Deserialize response to DefaultManagedAppProtection|null
     */
    private function deserializeGet(string $body): DefaultManagedAppProtection|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DefaultManagedAppProtection($data);
    }
    /**
     * Update defaultManagedAppProtection
     * @param DefaultManagedAppProtection $body Request body
     * @return DefaultManagedAppProtection|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(DefaultManagedAppProtection $body): DefaultManagedAppProtection|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to DefaultManagedAppProtection|null
     */
    private function deserializePatch(string $body): DefaultManagedAppProtection|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DefaultManagedAppProtection($data);
    }
    /**
     * Delete defaultManagedAppProtection
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
     * Navigate to apps
     *
     * @return AppsRequestBuilder
     */
    public function apps(): AppsRequestBuilder
    {
        return new AppsRequestBuilder($this->client, $this->requestUrl . '/apps');
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
}

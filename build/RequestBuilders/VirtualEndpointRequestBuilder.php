<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\VirtualEndpoint;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuditEventsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CloudPCsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceImagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GalleryImagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OnPremisesConnectionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ProvisioningPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UserSettingsRequestBuilder;

/**
 * Request builder for virtualEndpoint
 */
class VirtualEndpointRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get virtualEndpoint from deviceManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return VirtualEndpoint
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): VirtualEndpoint
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
     * Deserialize response to VirtualEndpoint
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
        return new VirtualEndpoint($data);
    }
    /**
     * Update the navigation property virtualEndpoint in deviceManagement
     * @param VirtualEndpoint $body Request body
     * @return VirtualEndpoint
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(VirtualEndpoint $body): VirtualEndpoint
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to VirtualEndpoint
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
        return new VirtualEndpoint($data);
    }
    /**
     * Delete navigation property virtualEndpoint for deviceManagement
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
     * Navigate to auditEvents
     *
     * @return AuditEventsRequestBuilder
     */
    public function auditEvents(): AuditEventsRequestBuilder
    {
        return new AuditEventsRequestBuilder($this->client, $this->requestUrl . '/auditEvents');
    }
    /**
     * Navigate to cloudPCs
     *
     * @return CloudPCsRequestBuilder
     */
    public function cloudPCs(): CloudPCsRequestBuilder
    {
        return new CloudPCsRequestBuilder($this->client, $this->requestUrl . '/cloudPCs');
    }
    /**
     * Navigate to deviceImages
     *
     * @return DeviceImagesRequestBuilder
     */
    public function deviceImages(): DeviceImagesRequestBuilder
    {
        return new DeviceImagesRequestBuilder($this->client, $this->requestUrl . '/deviceImages');
    }
    /**
     * Navigate to galleryImages
     *
     * @return GalleryImagesRequestBuilder
     */
    public function galleryImages(): GalleryImagesRequestBuilder
    {
        return new GalleryImagesRequestBuilder($this->client, $this->requestUrl . '/galleryImages');
    }
    /**
     * Navigate to onPremisesConnections
     *
     * @return OnPremisesConnectionsRequestBuilder
     */
    public function onPremisesConnections(): OnPremisesConnectionsRequestBuilder
    {
        return new OnPremisesConnectionsRequestBuilder($this->client, $this->requestUrl . '/onPremisesConnections');
    }
    /**
     * Navigate to provisioningPolicies
     *
     * @return ProvisioningPoliciesRequestBuilder
     */
    public function provisioningPolicies(): ProvisioningPoliciesRequestBuilder
    {
        return new ProvisioningPoliciesRequestBuilder($this->client, $this->requestUrl . '/provisioningPolicies');
    }
    /**
     * Navigate to userSettings
     *
     * @return UserSettingsRequestBuilder
     */
    public function userSettings(): UserSettingsRequestBuilder
    {
        return new UserSettingsRequestBuilder($this->client, $this->requestUrl . '/userSettings');
    }
}

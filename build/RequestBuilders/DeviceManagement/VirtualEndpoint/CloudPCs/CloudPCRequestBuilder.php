<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\VirtualEndpoint\CloudPCs;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CloudPC;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\VirtualEndpoint\CloudPCs\EndGracePeriodRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\VirtualEndpoint\CloudPCs\RebootRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\VirtualEndpoint\CloudPCs\RenameRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\VirtualEndpoint\CloudPCs\ResizeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\VirtualEndpoint\CloudPCs\RestoreRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\VirtualEndpoint\CloudPCs\TroubleshootRequestBuilder;

/**
 * Request builder for /deviceManagement/virtualEndpoint/cloudPCs/{cloudPC-id}
 */
class CloudPCRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get cloudPC
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return CloudPC|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): CloudPC|null
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
     * Deserialize response to CloudPC|null
     */
    private function deserializeGet(string $body): CloudPC|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new CloudPC($data);
    }
    /**
     * Update the navigation property cloudPCs in deviceManagement
     * @param CloudPC $body Request body
     * @return CloudPC|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(CloudPC $body): CloudPC|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to CloudPC|null
     */
    private function deserializePatch(string $body): CloudPC|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new CloudPC($data);
    }
    /**
     * Delete navigation property cloudPCs for deviceManagement
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
     * Navigate to endGracePeriod
     *
     * @return EndGracePeriodRequestBuilder
     */
    public function endGracePeriod(): EndGracePeriodRequestBuilder
    {
        return new EndGracePeriodRequestBuilder($this->client, $this->requestUrl . '/endGracePeriod');
    }
    /**
     * Navigate to reboot
     *
     * @return RebootRequestBuilder
     */
    public function reboot(): RebootRequestBuilder
    {
        return new RebootRequestBuilder($this->client, $this->requestUrl . '/reboot');
    }
    /**
     * Navigate to rename
     *
     * @return RenameRequestBuilder
     */
    public function rename(): RenameRequestBuilder
    {
        return new RenameRequestBuilder($this->client, $this->requestUrl . '/rename');
    }
    /**
     * Navigate to resize
     *
     * @return ResizeRequestBuilder
     */
    public function resize(): ResizeRequestBuilder
    {
        return new ResizeRequestBuilder($this->client, $this->requestUrl . '/resize');
    }
    /**
     * Navigate to restore
     *
     * @return RestoreRequestBuilder
     */
    public function restore(): RestoreRequestBuilder
    {
        return new RestoreRequestBuilder($this->client, $this->requestUrl . '/restore');
    }
    /**
     * Navigate to troubleshoot
     *
     * @return TroubleshootRequestBuilder
     */
    public function troubleshoot(): TroubleshootRequestBuilder
    {
        return new TroubleshootRequestBuilder($this->client, $this->requestUrl . '/troubleshoot');
    }
}

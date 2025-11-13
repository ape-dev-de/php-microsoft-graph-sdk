<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphmacOSLobApp\ContentVersions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MobileAppContent;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphmacOSLobApp\ContentVersions\ContainedAppsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileApps\GraphmacOSLobApp\ContentVersions\FilesRequestBuilder;

/**
 * Request builder for /deviceAppManagement/mobileApps/{mobileApp-id}/graph.macOSLobApp/contentVersions/{mobileAppContent-id}
 */
class MobileAppContentRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get contentVersions from deviceAppManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return MobileAppContent|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): MobileAppContent|null
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
     * Deserialize response to MobileAppContent|null
     */
    private function deserializeGet(string $body): MobileAppContent|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MobileAppContent($data);
    }
    /**
     * Update the navigation property contentVersions in deviceAppManagement
     * @param MobileAppContent $body Request body
     * @return MobileAppContent|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(MobileAppContent $body): MobileAppContent|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to MobileAppContent|null
     */
    private function deserializePatch(string $body): MobileAppContent|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MobileAppContent($data);
    }
    /**
     * Delete navigation property contentVersions for deviceAppManagement
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
     * Navigate to containedApps
     *
     * @return ContainedAppsRequestBuilder
     */
    public function containedApps(): ContainedAppsRequestBuilder
    {
        return new ContainedAppsRequestBuilder($this->client, $this->requestUrl . '/containedApps');
    }
    /**
     * Navigate to files
     *
     * @return FilesRequestBuilder
     */
    public function files(): FilesRequestBuilder
    {
        return new FilesRequestBuilder($this->client, $this->requestUrl . '/files');
    }
}

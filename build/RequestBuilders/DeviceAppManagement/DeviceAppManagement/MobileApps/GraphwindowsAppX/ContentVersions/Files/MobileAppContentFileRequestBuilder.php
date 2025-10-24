<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\MobileApps\GraphwindowsAppX\ContentVersions\Files;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MobileAppContentFile;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\MobileApps\GraphwindowsAppX\ContentVersions\Files\CommitRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\MobileApps\GraphwindowsAppX\ContentVersions\Files\RenewUploadRequestBuilder;

/**
 * Request builder for /deviceAppManagement/mobileApps/{mobileApp-id}/graph.windowsAppX/contentVersions/{mobileAppContent-id}/files/{mobileAppContentFile-id}
 */
class MobileAppContentFileRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get files from deviceAppManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return MobileAppContentFile
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): MobileAppContentFile
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
     * Deserialize response to MobileAppContentFile
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
        return new MobileAppContentFile($data);
    }
    /**
     * Update the navigation property files in deviceAppManagement
     * @param MobileAppContentFile $body Request body
     * @return MobileAppContentFile
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(MobileAppContentFile $body): MobileAppContentFile
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to MobileAppContentFile
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
        return new MobileAppContentFile($data);
    }
    /**
     * Delete navigation property files for deviceAppManagement
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
     * Navigate to commit
     *
     * @return CommitRequestBuilder
     */
    public function commit(): CommitRequestBuilder
    {
        return new CommitRequestBuilder($this->client, $this->requestUrl . '/commit');
    }
    /**
     * Navigate to renewUpload
     *
     * @return RenewUploadRequestBuilder
     */
    public function renewUpload(): RenewUploadRequestBuilder
    {
        return new RenewUploadRequestBuilder($this->client, $this->requestUrl . '/renewUpload');
    }
}

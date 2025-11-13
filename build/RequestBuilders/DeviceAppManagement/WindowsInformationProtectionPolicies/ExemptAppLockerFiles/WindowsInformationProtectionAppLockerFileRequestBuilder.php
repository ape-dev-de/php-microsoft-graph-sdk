<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\WindowsInformationProtectionPolicies\ExemptAppLockerFiles;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WindowsInformationProtectionAppLockerFile;

/**
 * Request builder for /deviceAppManagement/windowsInformationProtectionPolicies/{windowsInformationProtectionPolicy-id}/exemptAppLockerFiles/{windowsInformationProtectionAppLockerFile-id}
 */
class WindowsInformationProtectionAppLockerFileRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get windowsInformationProtectionAppLockerFile
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return WindowsInformationProtectionAppLockerFile|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): WindowsInformationProtectionAppLockerFile|null
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
     * Deserialize response to WindowsInformationProtectionAppLockerFile|null
     */
    private function deserializeGet(string $body): WindowsInformationProtectionAppLockerFile|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WindowsInformationProtectionAppLockerFile($data);
    }
    /**
     * Update windowsInformationProtectionAppLockerFile
     * @param WindowsInformationProtectionAppLockerFile $body Request body
     * @return WindowsInformationProtectionAppLockerFile|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(WindowsInformationProtectionAppLockerFile $body): WindowsInformationProtectionAppLockerFile|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to WindowsInformationProtectionAppLockerFile|null
     */
    private function deserializePatch(string $body): WindowsInformationProtectionAppLockerFile|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WindowsInformationProtectionAppLockerFile($data);
    }
    /**
     * Delete windowsInformationProtectionAppLockerFile
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
}

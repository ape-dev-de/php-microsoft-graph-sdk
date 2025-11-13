<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ManagedDevices;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WindowsProtectionState;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\ManagedDevices\WindowsProtectionState\DetectedMalwareStateRequestBuilder;

/**
 * Request builder for /users/{user-id}/managedDevices/{managedDevice-id}/windowsProtectionState
 */
class WindowsProtectionStateRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get windowsProtectionState from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return WindowsProtectionState|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): WindowsProtectionState|null
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
     * Deserialize response to WindowsProtectionState|null
     */
    private function deserializeGet(string $body): WindowsProtectionState|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WindowsProtectionState($data);
    }
    /**
     * Update the navigation property windowsProtectionState in users
     * @param WindowsProtectionState $body Request body
     * @return WindowsProtectionState|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(WindowsProtectionState $body): WindowsProtectionState|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to WindowsProtectionState|null
     */
    private function deserializePatch(string $body): WindowsProtectionState|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WindowsProtectionState($data);
    }
    /**
     * Delete navigation property windowsProtectionState for users
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
     * Navigate to detectedMalwareState
     *
     * @return DetectedMalwareStateRequestBuilder
     */
    public function detectedMalwareState(): DetectedMalwareStateRequestBuilder
    {
        return new DetectedMalwareStateRequestBuilder($this->client, $this->requestUrl . '/detectedMalwareState');
    }
}

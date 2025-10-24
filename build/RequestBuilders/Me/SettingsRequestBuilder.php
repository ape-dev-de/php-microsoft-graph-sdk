<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UserSettings;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Settings\ItemInsightsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Settings\ShiftPreferencesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Settings\StorageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Settings\WindowsRequestBuilder;

/**
 * Request builder for /me/settings
 */
class SettingsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get settings
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return UserSettings
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): UserSettings
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
     * Deserialize response to UserSettings
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
        return new UserSettings($data);
    }
    /**
     * Update userSettings
     * @param UserSettings $body Request body
     * @return UserSettings
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(UserSettings $body): UserSettings
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to UserSettings
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
        return new UserSettings($data);
    }
    /**
     * Delete navigation property settings for me
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
     * Navigate to itemInsights
     *
     * @return ItemInsightsRequestBuilder
     */
    public function itemInsights(): ItemInsightsRequestBuilder
    {
        return new ItemInsightsRequestBuilder($this->client, $this->requestUrl . '/itemInsights');
    }
    /**
     * Navigate to shiftPreferences
     *
     * @return ShiftPreferencesRequestBuilder
     */
    public function shiftPreferences(): ShiftPreferencesRequestBuilder
    {
        return new ShiftPreferencesRequestBuilder($this->client, $this->requestUrl . '/shiftPreferences');
    }
    /**
     * Navigate to storage
     *
     * @return StorageRequestBuilder
     */
    public function storage(): StorageRequestBuilder
    {
        return new StorageRequestBuilder($this->client, $this->requestUrl . '/storage');
    }
    /**
     * Navigate to windows
     *
     * @return WindowsRequestBuilder
     */
    public function windows(): WindowsRequestBuilder
    {
        return new WindowsRequestBuilder($this->client, $this->requestUrl . '/windows');
    }
}

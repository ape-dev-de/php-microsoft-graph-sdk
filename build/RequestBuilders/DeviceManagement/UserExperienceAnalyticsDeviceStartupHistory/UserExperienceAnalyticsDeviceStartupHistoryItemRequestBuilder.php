<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsDeviceStartupHistory;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UserExperienceAnalyticsDeviceStartupHistory;

/**
 * Request builder for /deviceManagement/userExperienceAnalyticsDeviceStartupHistory/{userExperienceAnalyticsDeviceStartupHistory-id}
 */
class UserExperienceAnalyticsDeviceStartupHistoryItemRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get userExperienceAnalyticsDeviceStartupHistory from deviceManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return UserExperienceAnalyticsDeviceStartupHistory|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): UserExperienceAnalyticsDeviceStartupHistory|null
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
     * Deserialize response to UserExperienceAnalyticsDeviceStartupHistory|null
     */
    private function deserializeGet(string $body): UserExperienceAnalyticsDeviceStartupHistory|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new UserExperienceAnalyticsDeviceStartupHistory($data);
    }
    /**
     * Update the navigation property userExperienceAnalyticsDeviceStartupHistory in deviceManagement
     * @param UserExperienceAnalyticsDeviceStartupHistory $body Request body
     * @return UserExperienceAnalyticsDeviceStartupHistory|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(UserExperienceAnalyticsDeviceStartupHistory $body): UserExperienceAnalyticsDeviceStartupHistory|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to UserExperienceAnalyticsDeviceStartupHistory|null
     */
    private function deserializePatch(string $body): UserExperienceAnalyticsDeviceStartupHistory|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new UserExperienceAnalyticsDeviceStartupHistory($data);
    }
    /**
     * Delete navigation property userExperienceAnalyticsDeviceStartupHistory for deviceManagement
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

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsDeviceScores;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UserExperienceAnalyticsDeviceScores;

/**
 * Request builder for /deviceManagement/userExperienceAnalyticsDeviceScores/{userExperienceAnalyticsDeviceScores-id}
 */
class UserExperienceAnalyticsDeviceScoresItemRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get userExperienceAnalyticsDeviceScores from deviceManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return UserExperienceAnalyticsDeviceScores|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): UserExperienceAnalyticsDeviceScores|null
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
     * Deserialize response to UserExperienceAnalyticsDeviceScores|null
     */
    private function deserializeGet(string $body): UserExperienceAnalyticsDeviceScores|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new UserExperienceAnalyticsDeviceScores($data);
    }
    /**
     * Update the navigation property userExperienceAnalyticsDeviceScores in deviceManagement
     * @param UserExperienceAnalyticsDeviceScores $body Request body
     * @return UserExperienceAnalyticsDeviceScores|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(UserExperienceAnalyticsDeviceScores $body): UserExperienceAnalyticsDeviceScores|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to UserExperienceAnalyticsDeviceScores|null
     */
    private function deserializePatch(string $body): UserExperienceAnalyticsDeviceScores|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new UserExperienceAnalyticsDeviceScores($data);
    }
    /**
     * Delete navigation property userExperienceAnalyticsDeviceScores for deviceManagement
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

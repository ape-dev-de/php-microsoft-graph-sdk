<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Activities\HistoryItems;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ActivityHistoryItem;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Activities\HistoryItems\ActivityRequestBuilder;

/**
 * Request builder for /users/{user-id}/activities/{userActivity-id}/historyItems/{activityHistoryItem-id}
 */
class ActivityHistoryItemRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get historyItems from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ActivityHistoryItem|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ActivityHistoryItem|null
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
     * Deserialize response to ActivityHistoryItem|null
     */
    private function deserializeGet(string $body): ActivityHistoryItem|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ActivityHistoryItem($data);
    }
    /**
     * Update the navigation property historyItems in users
     * @param ActivityHistoryItem $body Request body
     * @return ActivityHistoryItem|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ActivityHistoryItem $body): ActivityHistoryItem|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ActivityHistoryItem|null
     */
    private function deserializePatch(string $body): ActivityHistoryItem|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ActivityHistoryItem($data);
    }
    /**
     * Delete navigation property historyItems for users
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
     * Navigate to activity
     *
     * @return ActivityRequestBuilder
     */
    public function activity(): ActivityRequestBuilder
    {
        return new ActivityRequestBuilder($this->client, $this->requestUrl . '/activity');
    }
}

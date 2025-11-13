<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Solutions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkingTimeSchedule;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Solutions\WorkingTimeSchedule\EndWorkingTimeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Solutions\WorkingTimeSchedule\StartWorkingTimeRequestBuilder;

/**
 * Request builder for /me/solutions/workingTimeSchedule
 */
class WorkingTimeScheduleRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get workingTimeSchedule from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return WorkingTimeSchedule|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): WorkingTimeSchedule|null
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
     * Deserialize response to WorkingTimeSchedule|null
     */
    private function deserializeGet(string $body): WorkingTimeSchedule|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkingTimeSchedule($data);
    }
    /**
     * Update the navigation property workingTimeSchedule in me
     * @param WorkingTimeSchedule $body Request body
     * @return WorkingTimeSchedule|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(WorkingTimeSchedule $body): WorkingTimeSchedule|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to WorkingTimeSchedule|null
     */
    private function deserializePatch(string $body): WorkingTimeSchedule|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkingTimeSchedule($data);
    }
    /**
     * Delete navigation property workingTimeSchedule for me
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
     * Navigate to endWorkingTime
     *
     * @return EndWorkingTimeRequestBuilder
     */
    public function endWorkingTime(): EndWorkingTimeRequestBuilder
    {
        return new EndWorkingTimeRequestBuilder($this->client, $this->requestUrl . '/endWorkingTime');
    }
    /**
     * Navigate to startWorkingTime
     *
     * @return StartWorkingTimeRequestBuilder
     */
    public function startWorkingTime(): StartWorkingTimeRequestBuilder
    {
        return new StartWorkingTimeRequestBuilder($this->client, $this->requestUrl . '/startWorkingTime');
    }
}

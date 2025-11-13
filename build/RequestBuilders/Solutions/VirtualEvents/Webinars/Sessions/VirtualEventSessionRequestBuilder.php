<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\VirtualEvents\Webinars\Sessions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\VirtualEventSession;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\VirtualEvents\Webinars\Sessions\AttendanceReportsRequestBuilder;

/**
 * Request builder for /solutions/virtualEvents/webinars/{virtualEventWebinar-id}/sessions/{virtualEventSession-id}
 */
class VirtualEventSessionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get virtualEventSession
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return VirtualEventSession|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): VirtualEventSession|null
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
     * Deserialize response to VirtualEventSession|null
     */
    private function deserializeGet(string $body): VirtualEventSession|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new VirtualEventSession($data);
    }
    /**
     * Update the navigation property sessions in solutions
     * @param VirtualEventSession $body Request body
     * @return VirtualEventSession|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(VirtualEventSession $body): VirtualEventSession|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to VirtualEventSession|null
     */
    private function deserializePatch(string $body): VirtualEventSession|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new VirtualEventSession($data);
    }
    /**
     * Delete navigation property sessions for solutions
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
     * Navigate to attendanceReports
     *
     * @return AttendanceReportsRequestBuilder
     */
    public function attendanceReports(): AttendanceReportsRequestBuilder
    {
        return new AttendanceReportsRequestBuilder($this->client, $this->requestUrl . '/attendanceReports');
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ServiceAnnouncement;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\ServiceAnnouncement\HealthOverviewsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\ServiceAnnouncement\IssuesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\ServiceAnnouncement\MessagesRequestBuilder;

/**
 * Request builder for /admin/serviceAnnouncement
 */
class ServiceAnnouncementRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get serviceAnnouncement from admin
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ServiceAnnouncement|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ServiceAnnouncement|null
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
     * Deserialize response to ServiceAnnouncement|null
     */
    private function deserializeGet(string $body): ServiceAnnouncement|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ServiceAnnouncement($data);
    }
    /**
     * Update the navigation property serviceAnnouncement in admin
     * @param ServiceAnnouncement $body Request body
     * @return ServiceAnnouncement|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ServiceAnnouncement $body): ServiceAnnouncement|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ServiceAnnouncement|null
     */
    private function deserializePatch(string $body): ServiceAnnouncement|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ServiceAnnouncement($data);
    }
    /**
     * Delete navigation property serviceAnnouncement for admin
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
     * Navigate to healthOverviews
     *
     * @return HealthOverviewsRequestBuilder
     */
    public function healthOverviews(): HealthOverviewsRequestBuilder
    {
        return new HealthOverviewsRequestBuilder($this->client, $this->requestUrl . '/healthOverviews');
    }
    /**
     * Navigate to issues
     *
     * @return IssuesRequestBuilder
     */
    public function issues(): IssuesRequestBuilder
    {
        return new IssuesRequestBuilder($this->client, $this->requestUrl . '/issues');
    }
    /**
     * Navigate to messages
     *
     * @return MessagesRequestBuilder
     */
    public function messages(): MessagesRequestBuilder
    {
        return new MessagesRequestBuilder($this->client, $this->requestUrl . '/messages');
    }
}

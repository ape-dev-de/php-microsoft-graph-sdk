<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\MobileAppTroubleshootingEvents;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MobileAppTroubleshootingEvent;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\MobileAppTroubleshootingEvents\AppLogCollectionRequestsRequestBuilder;

/**
 * Request builder for /deviceManagement/mobileAppTroubleshootingEvents/{mobileAppTroubleshootingEvent-id}
 */
class MobileAppTroubleshootingEventRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get mobileAppTroubleshootingEvent
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return MobileAppTroubleshootingEvent|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): MobileAppTroubleshootingEvent|null
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
     * Deserialize response to MobileAppTroubleshootingEvent|null
     */
    private function deserializeGet(string $body): MobileAppTroubleshootingEvent|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MobileAppTroubleshootingEvent($data);
    }
    /**
     * Update mobileAppTroubleshootingEvent
     * @param MobileAppTroubleshootingEvent $body Request body
     * @return MobileAppTroubleshootingEvent|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(MobileAppTroubleshootingEvent $body): MobileAppTroubleshootingEvent|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to MobileAppTroubleshootingEvent|null
     */
    private function deserializePatch(string $body): MobileAppTroubleshootingEvent|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MobileAppTroubleshootingEvent($data);
    }
    /**
     * Delete mobileAppTroubleshootingEvent
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
     * Navigate to appLogCollectionRequests
     *
     * @return AppLogCollectionRequestsRequestBuilder
     */
    public function appLogCollectionRequests(): AppLogCollectionRequestsRequestBuilder
    {
        return new AppLogCollectionRequestsRequestBuilder($this->client, $this->requestUrl . '/appLogCollectionRequests');
    }
}

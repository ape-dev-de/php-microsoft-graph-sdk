<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceManagementTroubleshootingEventCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceManagementTroubleshootingEvent;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\DeviceManagementTroubleshootingEvents\DeviceManagementTroubleshootingEventRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\DeviceManagementTroubleshootingEvents\CountRequestBuilder;

/**
 * Request builder for /me/deviceManagementTroubleshootingEvents
 */
class DeviceManagementTroubleshootingEventsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get deviceManagementTroubleshootingEvents from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return DeviceManagementTroubleshootingEventCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): DeviceManagementTroubleshootingEventCollectionResponse|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count ? 'true' : 'false';
        }
        if ($orderby !== null && $orderby !== []) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to DeviceManagementTroubleshootingEventCollectionResponse|null
     */
    private function deserializeGet(string $body): DeviceManagementTroubleshootingEventCollectionResponse|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new DeviceManagementTroubleshootingEvent($item);
        }
        $collection = new DeviceManagementTroubleshootingEventCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to deviceManagementTroubleshootingEvents for me
     * @param DeviceManagementTroubleshootingEvent $body Request body
     * @return DeviceManagementTroubleshootingEvent|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(DeviceManagementTroubleshootingEvent $body): DeviceManagementTroubleshootingEvent|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to DeviceManagementTroubleshootingEvent|null
     */
    private function deserializePost(string $body): DeviceManagementTroubleshootingEvent|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DeviceManagementTroubleshootingEvent($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $deviceManagementTroubleshootingEventId The item ID
     * @return DeviceManagementTroubleshootingEventRequestBuilder
     */
    public function byId(string $deviceManagementTroubleshootingEventId): DeviceManagementTroubleshootingEventRequestBuilder
    {
        return new DeviceManagementTroubleshootingEventRequestBuilder($this->client, $this->requestUrl . '/' . $deviceManagementTroubleshootingEventId);
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
}

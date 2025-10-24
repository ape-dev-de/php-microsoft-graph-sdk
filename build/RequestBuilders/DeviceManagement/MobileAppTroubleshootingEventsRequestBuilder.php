<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MobileAppTroubleshootingEventCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\MobileAppTroubleshootingEvent;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\MobileAppTroubleshootingEvents\MobileAppTroubleshootingEventRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\MobileAppTroubleshootingEvents\CountRequestBuilder;

/**
 * Request builder for /deviceManagement/mobileAppTroubleshootingEvents
 */
class MobileAppTroubleshootingEventsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List mobileAppTroubleshootingEvents
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return MobileAppTroubleshootingEventCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): MobileAppTroubleshootingEventCollectionResponse
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
     * Deserialize response to MobileAppTroubleshootingEventCollectionResponse
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
        
        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new MobileAppTroubleshootingEvent($item);
        }
        $collection = new MobileAppTroubleshootingEventCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create mobileAppTroubleshootingEvent
     * @param MobileAppTroubleshootingEvent $body Request body
     * @return MobileAppTroubleshootingEvent
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(MobileAppTroubleshootingEvent $body): MobileAppTroubleshootingEvent
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to MobileAppTroubleshootingEvent
     */
    private function deserializePost(string $body): mixed
    {
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
     * Get request builder for specific item by ID
     *
     * @param string $mobileAppTroubleshootingEventId The item ID
     * @return MobileAppTroubleshootingEventRequestBuilder
     */
    public function byId(string $mobileAppTroubleshootingEventId): MobileAppTroubleshootingEventRequestBuilder
    {
        return new MobileAppTroubleshootingEventRequestBuilder($this->client, $this->requestUrl . '/' . $mobileAppTroubleshootingEventId);
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

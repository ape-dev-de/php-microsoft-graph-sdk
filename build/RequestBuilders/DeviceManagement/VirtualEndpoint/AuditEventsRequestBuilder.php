<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\VirtualEndpoint;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CloudPcAuditEventCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\CloudPcAuditEvent;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\VirtualEndpoint\AuditEvents\CloudPcAuditEventRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\VirtualEndpoint\AuditEvents\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\VirtualEndpoint\AuditEvents\GetAuditActivityTypesRequestBuilder;

/**
 * Request builder for /deviceManagement/virtualEndpoint/auditEvents
 */
class AuditEventsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List auditEvents
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return CloudPcAuditEventCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): CloudPcAuditEventCollectionResponse|null
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
     * Deserialize response to CloudPcAuditEventCollectionResponse|null
     */
    private function deserializeGet(string $body): CloudPcAuditEventCollectionResponse|null    {
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
            $items[] = new CloudPcAuditEvent($item);
        }
        $collection = new CloudPcAuditEventCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to auditEvents for deviceManagement
     * @param CloudPcAuditEvent $body Request body
     * @return CloudPcAuditEvent|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(CloudPcAuditEvent $body): CloudPcAuditEvent|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to CloudPcAuditEvent|null
     */
    private function deserializePost(string $body): CloudPcAuditEvent|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new CloudPcAuditEvent($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $cloudPcAuditEventId The item ID
     * @return CloudPcAuditEventRequestBuilder
     */
    public function byId(string $cloudPcAuditEventId): CloudPcAuditEventRequestBuilder
    {
        return new CloudPcAuditEventRequestBuilder($this->client, $this->requestUrl . '/' . $cloudPcAuditEventId);
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
    /**
     * Navigate to getAuditActivityTypes()
     *
     * @return GetAuditActivityTypesRequestBuilder
     */
    public function getAuditActivityTypes(): GetAuditActivityTypesRequestBuilder
    {
        return new GetAuditActivityTypesRequestBuilder($this->client, $this->requestUrl . '/getAuditActivityTypes()');
    }
}

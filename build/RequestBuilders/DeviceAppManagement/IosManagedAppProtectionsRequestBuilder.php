<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IosManagedAppProtectionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\IosManagedAppProtection;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\IosManagedAppProtections\IosManagedAppProtectionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\IosManagedAppProtections\CountRequestBuilder;

/**
 * Request builder for /deviceAppManagement/iosManagedAppProtections
 */
class IosManagedAppProtectionsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List iosManagedAppProtections
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return IosManagedAppProtectionCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): IosManagedAppProtectionCollectionResponse|null
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
     * Deserialize response to IosManagedAppProtectionCollectionResponse|null
     */
    private function deserializeGet(string $body): IosManagedAppProtectionCollectionResponse|null    {
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
            $items[] = new IosManagedAppProtection($item);
        }
        $collection = new IosManagedAppProtectionCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create iosManagedAppProtection
     * @param IosManagedAppProtection $body Request body
     * @return IosManagedAppProtection|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(IosManagedAppProtection $body): IosManagedAppProtection|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to IosManagedAppProtection|null
     */
    private function deserializePost(string $body): IosManagedAppProtection|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new IosManagedAppProtection($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $iosManagedAppProtectionId The item ID
     * @return IosManagedAppProtectionRequestBuilder
     */
    public function byId(string $iosManagedAppProtectionId): IosManagedAppProtectionRequestBuilder
    {
        return new IosManagedAppProtectionRequestBuilder($this->client, $this->requestUrl . '/' . $iosManagedAppProtectionId);
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

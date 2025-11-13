<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DefaultManagedAppProtectionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\DefaultManagedAppProtection;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DefaultManagedAppProtections\DefaultManagedAppProtectionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DefaultManagedAppProtections\CountRequestBuilder;

/**
 * Request builder for /deviceAppManagement/defaultManagedAppProtections
 */
class DefaultManagedAppProtectionsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List defaultManagedAppProtections
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return DefaultManagedAppProtectionCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): DefaultManagedAppProtectionCollectionResponse|null
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
     * Deserialize response to DefaultManagedAppProtectionCollectionResponse|null
     */
    private function deserializeGet(string $body): DefaultManagedAppProtectionCollectionResponse|null    {
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
            $items[] = new DefaultManagedAppProtection($item);
        }
        $collection = new DefaultManagedAppProtectionCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create defaultManagedAppProtection
     * @param DefaultManagedAppProtection $body Request body
     * @return DefaultManagedAppProtection|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(DefaultManagedAppProtection $body): DefaultManagedAppProtection|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to DefaultManagedAppProtection|null
     */
    private function deserializePost(string $body): DefaultManagedAppProtection|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DefaultManagedAppProtection($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $defaultManagedAppProtectionId The item ID
     * @return DefaultManagedAppProtectionRequestBuilder
     */
    public function byId(string $defaultManagedAppProtectionId): DefaultManagedAppProtectionRequestBuilder
    {
        return new DefaultManagedAppProtectionRequestBuilder($this->client, $this->requestUrl . '/' . $defaultManagedAppProtectionId);
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

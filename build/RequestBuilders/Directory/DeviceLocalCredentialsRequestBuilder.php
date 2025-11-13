<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceLocalCredentialInfoCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceLocalCredentialInfo;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\DeviceLocalCredentials\DeviceLocalCredentialInfoRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\DeviceLocalCredentials\CountRequestBuilder;

/**
 * Request builder for /directory/deviceLocalCredentials
 */
class DeviceLocalCredentialsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List deviceLocalCredentialInfo
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return DeviceLocalCredentialInfoCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): DeviceLocalCredentialInfoCollectionResponse|null
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
     * Deserialize response to DeviceLocalCredentialInfoCollectionResponse|null
     */
    private function deserializeGet(string $body): DeviceLocalCredentialInfoCollectionResponse|null    {
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
            $items[] = new DeviceLocalCredentialInfo($item);
        }
        $collection = new DeviceLocalCredentialInfoCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to deviceLocalCredentials for directory
     * @param DeviceLocalCredentialInfo $body Request body
     * @return DeviceLocalCredentialInfo|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(DeviceLocalCredentialInfo $body): DeviceLocalCredentialInfo|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to DeviceLocalCredentialInfo|null
     */
    private function deserializePost(string $body): DeviceLocalCredentialInfo|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DeviceLocalCredentialInfo($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $deviceLocalCredentialInfoId The item ID
     * @return DeviceLocalCredentialInfoRequestBuilder
     */
    public function byId(string $deviceLocalCredentialInfoId): DeviceLocalCredentialInfoRequestBuilder
    {
        return new DeviceLocalCredentialInfoRequestBuilder($this->client, $this->requestUrl . '/' . $deviceLocalCredentialInfoId);
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

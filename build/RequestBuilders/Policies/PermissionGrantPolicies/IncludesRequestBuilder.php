<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\PermissionGrantPolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PermissionGrantConditionSetCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\PermissionGrantConditionSet;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\PermissionGrantPolicies\Includes\PermissionGrantConditionSetRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\PermissionGrantPolicies\Includes\CountRequestBuilder;

/**
 * Request builder for /policies/permissionGrantPolicies/{permissionGrantPolicy-id}/includes
 */
class IncludesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List includes collection of permissionGrantPolicy
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return PermissionGrantConditionSetCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): PermissionGrantConditionSetCollectionResponse|null
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
     * Deserialize response to PermissionGrantConditionSetCollectionResponse|null
     */
    private function deserializeGet(string $body): PermissionGrantConditionSetCollectionResponse|null    {
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
            $items[] = new PermissionGrantConditionSet($item);
        }
        $collection = new PermissionGrantConditionSetCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create permissionGrantConditionSet in includes collection of permissionGrantPolicy
     * @param PermissionGrantConditionSet $body Request body
     * @return PermissionGrantConditionSet|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(PermissionGrantConditionSet $body): PermissionGrantConditionSet|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to PermissionGrantConditionSet|null
     */
    private function deserializePost(string $body): PermissionGrantConditionSet|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PermissionGrantConditionSet($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $permissionGrantConditionSetId The item ID
     * @return PermissionGrantConditionSetRequestBuilder
     */
    public function byId(string $permissionGrantConditionSetId): PermissionGrantConditionSetRequestBuilder
    {
        return new PermissionGrantConditionSetRequestBuilder($this->client, $this->requestUrl . '/' . $permissionGrantConditionSetId);
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

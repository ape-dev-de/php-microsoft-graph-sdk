<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UnifiedRoleManagementPolicyCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\UnifiedRoleManagementPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\RoleManagementPolicies\UnifiedRoleManagementPolicyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\RoleManagementPolicies\CountRequestBuilder;

/**
 * Request builder for /policies/roleManagementPolicies
 */
class RoleManagementPoliciesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List roleManagementPolicies
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return UnifiedRoleManagementPolicyCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): UnifiedRoleManagementPolicyCollectionResponse|null
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
     * Deserialize response to UnifiedRoleManagementPolicyCollectionResponse|null
     */
    private function deserializeGet(string $body): UnifiedRoleManagementPolicyCollectionResponse|null    {
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
            $items[] = new UnifiedRoleManagementPolicy($item);
        }
        $collection = new UnifiedRoleManagementPolicyCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to roleManagementPolicies for policies
     * @param UnifiedRoleManagementPolicy $body Request body
     * @return UnifiedRoleManagementPolicy|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(UnifiedRoleManagementPolicy $body): UnifiedRoleManagementPolicy|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to UnifiedRoleManagementPolicy|null
     */
    private function deserializePost(string $body): UnifiedRoleManagementPolicy|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new UnifiedRoleManagementPolicy($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $unifiedRoleManagementPolicyId The item ID
     * @return UnifiedRoleManagementPolicyRequestBuilder
     */
    public function byId(string $unifiedRoleManagementPolicyId): UnifiedRoleManagementPolicyRequestBuilder
    {
        return new UnifiedRoleManagementPolicyRequestBuilder($this->client, $this->requestUrl . '/' . $unifiedRoleManagementPolicyId);
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

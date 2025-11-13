<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UnifiedRoleAssignmentCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\UnifiedRoleAssignment;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleAssignments\UnifiedRoleAssignmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleManagement\Directory\RoleAssignments\CountRequestBuilder;

/**
 * Request builder for /roleManagement/directory/roleAssignments
 */
class RoleAssignmentsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List unifiedRoleAssignments
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return UnifiedRoleAssignmentCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): UnifiedRoleAssignmentCollectionResponse|null
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
     * Deserialize response to UnifiedRoleAssignmentCollectionResponse|null
     */
    private function deserializeGet(string $body): UnifiedRoleAssignmentCollectionResponse|null    {
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
            $items[] = new UnifiedRoleAssignment($item);
        }
        $collection = new UnifiedRoleAssignmentCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create unifiedRoleAssignment
     * @param UnifiedRoleAssignment $body Request body
     * @return UnifiedRoleAssignment|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(UnifiedRoleAssignment $body): UnifiedRoleAssignment|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to UnifiedRoleAssignment|null
     */
    private function deserializePost(string $body): UnifiedRoleAssignment|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new UnifiedRoleAssignment($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $unifiedRoleAssignmentId The item ID
     * @return UnifiedRoleAssignmentRequestBuilder
     */
    public function byId(string $unifiedRoleAssignmentId): UnifiedRoleAssignmentRequestBuilder
    {
        return new UnifiedRoleAssignmentRequestBuilder($this->client, $this->requestUrl . '/' . $unifiedRoleAssignmentId);
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

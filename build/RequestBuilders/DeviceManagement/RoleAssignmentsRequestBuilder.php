<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceAndAppManagementRoleAssignmentCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceAndAppManagementRoleAssignment;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\RoleAssignments\DeviceAndAppManagementRoleAssignmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\RoleAssignments\CountRequestBuilder;

/**
 * Request builder for /deviceManagement/roleAssignments
 */
class RoleAssignmentsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List deviceAndAppManagementRoleAssignments
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return DeviceAndAppManagementRoleAssignmentCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): DeviceAndAppManagementRoleAssignmentCollectionResponse|null
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
     * Deserialize response to DeviceAndAppManagementRoleAssignmentCollectionResponse|null
     */
    private function deserializeGet(string $body): DeviceAndAppManagementRoleAssignmentCollectionResponse|null    {
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
            $items[] = new DeviceAndAppManagementRoleAssignment($item);
        }
        $collection = new DeviceAndAppManagementRoleAssignmentCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create deviceAndAppManagementRoleAssignment
     * @param DeviceAndAppManagementRoleAssignment $body Request body
     * @return DeviceAndAppManagementRoleAssignment|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(DeviceAndAppManagementRoleAssignment $body): DeviceAndAppManagementRoleAssignment|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to DeviceAndAppManagementRoleAssignment|null
     */
    private function deserializePost(string $body): DeviceAndAppManagementRoleAssignment|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DeviceAndAppManagementRoleAssignment($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $deviceAndAppManagementRoleAssignmentId The item ID
     * @return DeviceAndAppManagementRoleAssignmentRequestBuilder
     */
    public function byId(string $deviceAndAppManagementRoleAssignmentId): DeviceAndAppManagementRoleAssignmentRequestBuilder
    {
        return new DeviceAndAppManagementRoleAssignmentRequestBuilder($this->client, $this->requestUrl . '/' . $deviceAndAppManagementRoleAssignmentId);
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

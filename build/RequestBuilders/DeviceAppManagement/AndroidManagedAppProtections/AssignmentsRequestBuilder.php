<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\AndroidManagedAppProtections;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TargetedManagedAppPolicyAssignmentCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\TargetedManagedAppPolicyAssignment;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\AndroidManagedAppProtections\Assignments\TargetedManagedAppPolicyAssignmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\AndroidManagedAppProtections\Assignments\CountRequestBuilder;

/**
 * Request builder for /deviceAppManagement/androidManagedAppProtections/{androidManagedAppProtection-id}/assignments
 */
class AssignmentsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get assignments from deviceAppManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return TargetedManagedAppPolicyAssignmentCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): TargetedManagedAppPolicyAssignmentCollectionResponse
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
     * Deserialize response to TargetedManagedAppPolicyAssignmentCollectionResponse
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
            $items[] = new TargetedManagedAppPolicyAssignment($item);
        }
        $collection = new TargetedManagedAppPolicyAssignmentCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to assignments for deviceAppManagement
     * @param TargetedManagedAppPolicyAssignment $body Request body
     * @return TargetedManagedAppPolicyAssignment
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(TargetedManagedAppPolicyAssignment $body): TargetedManagedAppPolicyAssignment
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to TargetedManagedAppPolicyAssignment
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
        return new TargetedManagedAppPolicyAssignment($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $targetedManagedAppPolicyAssignmentId The item ID
     * @return TargetedManagedAppPolicyAssignmentRequestBuilder
     */
    public function byId(string $targetedManagedAppPolicyAssignmentId): TargetedManagedAppPolicyAssignmentRequestBuilder
    {
        return new TargetedManagedAppPolicyAssignmentRequestBuilder($this->client, $this->requestUrl . '/' . $targetedManagedAppPolicyAssignmentId);
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

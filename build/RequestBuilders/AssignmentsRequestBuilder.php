<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessPackageAssignmentCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessPackageAssignment;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AccessPackageAssignmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AdditionalAccessRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\FilterByCurrentUserRequestBuilder;

/**
 * Request builder for assignments
 */
class AssignmentsRequestBuilder extends BaseRequestBuilder
{
    /**
     * List assignments
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return AccessPackageAssignmentCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): AccessPackageAssignmentCollectionResponse
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null) {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null) {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count;
        }
        if ($orderby !== null) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to AccessPackageAssignmentCollectionResponse
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
            $items[] = new AccessPackageAssignment($item);
        }
        $collection = new AccessPackageAssignmentCollectionResponse([]);
        $collection->value = $items;
        $collection->odataContext = $data['@odata.context'] ?? null;
        $collection->odataNextLink = $data['@odata.nextLink'] ?? null;
        $collection->odataCount = $data['@odata.count'] ?? null;
        return $collection;
    }
    /**
     * Create new navigation property to assignments for identityGovernance
     * @param AccessPackageAssignment $body Request body
     * @return AccessPackageAssignment
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(AccessPackageAssignment $body): AccessPackageAssignment
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to AccessPackageAssignment
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
        return new AccessPackageAssignment($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $accessPackageAssignmentId The item ID
     * @return AccessPackageAssignmentRequestBuilder
     */
    public function byId(string $accessPackageAssignmentId): AccessPackageAssignmentRequestBuilder
    {
        return new AccessPackageAssignmentRequestBuilder($this->client, $this->requestUrl . '/' . $accessPackageAssignmentId);
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
     * Navigate to additionalAccess()
     *
     * @return AdditionalAccessRequestBuilder
     */
    public function additionalAccess(): AdditionalAccessRequestBuilder
    {
        return new AdditionalAccessRequestBuilder($this->client, $this->requestUrl . '/additionalAccess()');
    }
}

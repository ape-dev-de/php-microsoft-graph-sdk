<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\MdmWindowsInformationProtectionPolicyCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\MdmWindowsInformationProtectionPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MdmWindowsInformationProtectionPolicyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CountRequestBuilder;

/**
 * Request builder for mdmWindowsInformationProtectionPolicies
 */
class MdmWindowsInformationProtectionPoliciesRequestBuilder extends BaseRequestBuilder
{
    /**
     * List mdmWindowsInformationProtectionPolicies
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return MdmWindowsInformationProtectionPolicyCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): MdmWindowsInformationProtectionPolicyCollectionResponse
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
     * Deserialize response to MdmWindowsInformationProtectionPolicyCollectionResponse
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
            $items[] = new MdmWindowsInformationProtectionPolicy($item);
        }
        $collection = new MdmWindowsInformationProtectionPolicyCollectionResponse([]);
        $collection->value = $items;
        $collection->odataContext = $data['@odata.context'] ?? null;
        $collection->odataNextLink = $data['@odata.nextLink'] ?? null;
        $collection->odataCount = $data['@odata.count'] ?? null;
        return $collection;
    }
    /**
     * Create mdmWindowsInformationProtectionPolicy
     * @param MdmWindowsInformationProtectionPolicy $body Request body
     * @return MdmWindowsInformationProtectionPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(MdmWindowsInformationProtectionPolicy $body): MdmWindowsInformationProtectionPolicy
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to MdmWindowsInformationProtectionPolicy
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
        return new MdmWindowsInformationProtectionPolicy($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $mdmWindowsInformationProtectionPolicyId The item ID
     * @return MdmWindowsInformationProtectionPolicyRequestBuilder
     */
    public function byId(string $mdmWindowsInformationProtectionPolicyId): MdmWindowsInformationProtectionPolicyRequestBuilder
    {
        return new MdmWindowsInformationProtectionPolicyRequestBuilder($this->client, $this->requestUrl . '/' . $mdmWindowsInformationProtectionPolicyId);
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

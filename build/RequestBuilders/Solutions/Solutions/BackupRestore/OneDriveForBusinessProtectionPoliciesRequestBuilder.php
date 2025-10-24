<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\Solutions\BackupRestore;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OneDriveForBusinessProtectionPolicyCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\OneDriveForBusinessProtectionPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\OneDriveForBusinessProtectionPolicyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\CountRequestBuilder;

/**
 * Request builder for /solutions/backupRestore/oneDriveForBusinessProtectionPolicies
 */
class OneDriveForBusinessProtectionPoliciesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get oneDriveForBusinessProtectionPolicies from solutions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return OneDriveForBusinessProtectionPolicyCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): OneDriveForBusinessProtectionPolicyCollectionResponse
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
     * Deserialize response to OneDriveForBusinessProtectionPolicyCollectionResponse
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
            $items[] = new OneDriveForBusinessProtectionPolicy($item);
        }
        $collection = new OneDriveForBusinessProtectionPolicyCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create oneDriveForBusinessProtectionPolicy
     * @param OneDriveForBusinessProtectionPolicy $body Request body
     * @return OneDriveForBusinessProtectionPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(OneDriveForBusinessProtectionPolicy $body): OneDriveForBusinessProtectionPolicy
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to OneDriveForBusinessProtectionPolicy
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
        return new OneDriveForBusinessProtectionPolicy($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $oneDriveForBusinessProtectionPolicyId The item ID
     * @return OneDriveForBusinessProtectionPolicyRequestBuilder
     */
    public function byId(string $oneDriveForBusinessProtectionPolicyId): OneDriveForBusinessProtectionPolicyRequestBuilder
    {
        return new OneDriveForBusinessProtectionPolicyRequestBuilder($this->client, $this->requestUrl . '/' . $oneDriveForBusinessProtectionPolicyId);
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

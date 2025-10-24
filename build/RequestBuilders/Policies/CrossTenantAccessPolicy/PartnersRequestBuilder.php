<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\CrossTenantAccessPolicy;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CrossTenantAccessPolicyConfigurationPartnerCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\CrossTenantAccessPolicyConfigurationPartner;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\CrossTenantAccessPolicy\Partners\CrossTenantAccessPolicyConfigurationPartnerTenantIdRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\CrossTenantAccessPolicy\Partners\CountRequestBuilder;

/**
 * Request builder for /policies/crossTenantAccessPolicy/partners
 */
class PartnersRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List partners
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return CrossTenantAccessPolicyConfigurationPartnerCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): CrossTenantAccessPolicyConfigurationPartnerCollectionResponse
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
     * Deserialize response to CrossTenantAccessPolicyConfigurationPartnerCollectionResponse
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
            $items[] = new CrossTenantAccessPolicyConfigurationPartner($item);
        }
        $collection = new CrossTenantAccessPolicyConfigurationPartnerCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create crossTenantAccessPolicyConfigurationPartner
     * @param CrossTenantAccessPolicyConfigurationPartner $body Request body
     * @return CrossTenantAccessPolicyConfigurationPartner
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(CrossTenantAccessPolicyConfigurationPartner $body): CrossTenantAccessPolicyConfigurationPartner
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to CrossTenantAccessPolicyConfigurationPartner
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
        return new CrossTenantAccessPolicyConfigurationPartner($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $crossTenantAccessPolicyConfigurationPartnerTenantIdId The item ID
     * @return CrossTenantAccessPolicyConfigurationPartnerTenantIdRequestBuilder
     */
    public function byId(string $crossTenantAccessPolicyConfigurationPartnerTenantIdId): CrossTenantAccessPolicyConfigurationPartnerTenantIdRequestBuilder
    {
        return new CrossTenantAccessPolicyConfigurationPartnerTenantIdRequestBuilder($this->client, $this->requestUrl . '/' . $crossTenantAccessPolicyConfigurationPartnerTenantIdId);
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

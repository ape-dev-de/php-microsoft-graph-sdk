<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TenantRelationship;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DelegatedAdminCustomersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DelegatedAdminRelationshipsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\FindTenantInformationByDomainNameRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\FindTenantInformationByTenantIdRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MultiTenantOrganizationRequestBuilder;

/**
 * Request builder for tenantRelationships
 */
class TenantRelationshipsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get tenantRelationships
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TenantRelationship
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TenantRelationship
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to TenantRelationship
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
        
        // Single object
        return new TenantRelationship($data);
    }
    /**
     * Update tenantRelationships
     * @param TenantRelationship $body Request body
     * @return TenantRelationship
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TenantRelationship $body): TenantRelationship
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TenantRelationship
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new TenantRelationship($data);
    }
    /**
     * Navigate to delegatedAdminCustomers
     *
     * @return DelegatedAdminCustomersRequestBuilder
     */
    public function delegatedAdminCustomers(): DelegatedAdminCustomersRequestBuilder
    {
        return new DelegatedAdminCustomersRequestBuilder($this->client, $this->requestUrl . '/delegatedAdminCustomers');
    }
    /**
     * Navigate to delegatedAdminRelationships
     *
     * @return DelegatedAdminRelationshipsRequestBuilder
     */
    public function delegatedAdminRelationships(): DelegatedAdminRelationshipsRequestBuilder
    {
        return new DelegatedAdminRelationshipsRequestBuilder($this->client, $this->requestUrl . '/delegatedAdminRelationships');
    }
    /**
     * Navigate to multiTenantOrganization
     *
     * @return MultiTenantOrganizationRequestBuilder
     */
    public function multiTenantOrganization(): MultiTenantOrganizationRequestBuilder
    {
        return new MultiTenantOrganizationRequestBuilder($this->client, $this->requestUrl . '/multiTenantOrganization');
    }
}

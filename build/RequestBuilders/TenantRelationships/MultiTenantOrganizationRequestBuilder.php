<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TenantRelationships;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MultiTenantOrganization;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TenantRelationships\MultiTenantOrganization\JoinRequestRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TenantRelationships\MultiTenantOrganization\TenantsRequestBuilder;

/**
 * Request builder for /tenantRelationships/multiTenantOrganization
 */
class MultiTenantOrganizationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get multiTenantOrganization
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return MultiTenantOrganization
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): MultiTenantOrganization
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to MultiTenantOrganization
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
        return new MultiTenantOrganization($data);
    }
    /**
     * Update multiTenantOrganization
     * @param MultiTenantOrganization $body Request body
     * @return MultiTenantOrganization
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(MultiTenantOrganization $body): MultiTenantOrganization
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to MultiTenantOrganization
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
        return new MultiTenantOrganization($data);
    }
    /**
     * Navigate to joinRequest
     *
     * @return JoinRequestRequestBuilder
     */
    public function joinRequest(): JoinRequestRequestBuilder
    {
        return new JoinRequestRequestBuilder($this->client, $this->requestUrl . '/joinRequest');
    }
    /**
     * Navigate to tenants
     *
     * @return TenantsRequestBuilder
     */
    public function tenants(): TenantsRequestBuilder
    {
        return new TenantsRequestBuilder($this->client, $this->requestUrl . '/tenants');
    }
}

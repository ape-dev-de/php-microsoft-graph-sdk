<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CrossTenantAccessPolicyConfigurationPartner;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentitySynchronizationRequestBuilder;

/**
 * Request builder for {crossTenantAccessPolicyConfigurationPartner-tenantId}
 */
class CrossTenantAccessPolicyConfigurationPartnerTenantIdRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get crossTenantAccessPolicyConfigurationPartner
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return CrossTenantAccessPolicyConfigurationPartner
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): CrossTenantAccessPolicyConfigurationPartner
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
     * Deserialize response to CrossTenantAccessPolicyConfigurationPartner
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
        return new CrossTenantAccessPolicyConfigurationPartner($data);
    }
    /**
     * Update crossTenantAccessPolicyConfigurationPartner
     * @param CrossTenantAccessPolicyConfigurationPartner $body Request body
     * @return CrossTenantAccessPolicyConfigurationPartner
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(CrossTenantAccessPolicyConfigurationPartner $body): CrossTenantAccessPolicyConfigurationPartner
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to CrossTenantAccessPolicyConfigurationPartner
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
        return new CrossTenantAccessPolicyConfigurationPartner($data);
    }
    /**
     * Delete crossTenantAccessPolicyConfigurationPartner
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null) {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return $data;
    }
    /**
     * Navigate to identitySynchronization
     *
     * @return IdentitySynchronizationRequestBuilder
     */
    public function identitySynchronization(): IdentitySynchronizationRequestBuilder
    {
        return new IdentitySynchronizationRequestBuilder($this->client, $this->requestUrl . '/identitySynchronization');
    }
}

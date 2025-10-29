<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TenantRelationships\DelegatedAdminCustomers;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DelegatedAdminCustomer;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TenantRelationships\DelegatedAdminCustomers\ServiceManagementDetailsRequestBuilder;

/**
 * Request builder for /tenantRelationships/delegatedAdminCustomers/{delegatedAdminCustomer-id}
 */
class DelegatedAdminCustomerRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get delegatedAdminCustomer
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return DelegatedAdminCustomer
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): DelegatedAdminCustomer
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
     * Deserialize response to DelegatedAdminCustomer
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
        return new DelegatedAdminCustomer($data);
    }
    /**
     * Update the navigation property delegatedAdminCustomers in tenantRelationships
     * @param DelegatedAdminCustomer $body Request body
     * @return DelegatedAdminCustomer
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(DelegatedAdminCustomer $body): DelegatedAdminCustomer
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to DelegatedAdminCustomer
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
        return new DelegatedAdminCustomer($data);
    }
    /**
     * Delete navigation property delegatedAdminCustomers for tenantRelationships
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
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
     * Navigate to serviceManagementDetails
     *
     * @return ServiceManagementDetailsRequestBuilder
     */
    public function serviceManagementDetails(): ServiceManagementDetailsRequestBuilder
    {
        return new ServiceManagementDetailsRequestBuilder($this->client, $this->requestUrl . '/serviceManagementDetails');
    }
}

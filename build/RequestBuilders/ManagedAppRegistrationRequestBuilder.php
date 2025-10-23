<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ManagedAppRegistration;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AppliedPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IntendedPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OperationsRequestBuilder;

/**
 * Request builder for {managedAppRegistration-id}
 */
class ManagedAppRegistrationRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get androidManagedAppRegistration
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ManagedAppRegistration
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ManagedAppRegistration
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
     * Deserialize response to ManagedAppRegistration
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
        return new ManagedAppRegistration($data);
    }
    /**
     * Update the navigation property managedAppRegistrations in deviceAppManagement
     * @param ManagedAppRegistration $body Request body
     * @return ManagedAppRegistration
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ManagedAppRegistration $body): ManagedAppRegistration
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ManagedAppRegistration
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
        return new ManagedAppRegistration($data);
    }
    /**
     * Delete navigation property managedAppRegistrations for deviceAppManagement
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
     * Navigate to appliedPolicies
     *
     * @return AppliedPoliciesRequestBuilder
     */
    public function appliedPolicies(): AppliedPoliciesRequestBuilder
    {
        return new AppliedPoliciesRequestBuilder($this->client, $this->requestUrl . '/appliedPolicies');
    }
    /**
     * Navigate to intendedPolicies
     *
     * @return IntendedPoliciesRequestBuilder
     */
    public function intendedPolicies(): IntendedPoliciesRequestBuilder
    {
        return new IntendedPoliciesRequestBuilder($this->client, $this->requestUrl . '/intendedPolicies');
    }
    /**
     * Navigate to operations
     *
     * @return OperationsRequestBuilder
     */
    public function operations(): OperationsRequestBuilder
    {
        return new OperationsRequestBuilder($this->client, $this->requestUrl . '/operations');
    }
}

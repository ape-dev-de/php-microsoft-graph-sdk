<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AccessPackages;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessPackage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AccessPackages\AccessPackagesIncompatibleWithRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AccessPackages\AssignmentPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AccessPackages\CatalogRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AccessPackages\IncompatibleAccessPackagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AccessPackages\IncompatibleGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AccessPackages\GetApplicablePolicyRequirementsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AccessPackages\ResourceRoleScopesRequestBuilder;

/**
 * Request builder for /identityGovernance/entitlementManagement/accessPackages/{accessPackage-id}
 */
class AccessPackageRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List resourceRoleScopes
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AccessPackage
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AccessPackage
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
     * Deserialize response to AccessPackage
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
        return new AccessPackage($data);
    }
    /**
     * Update accessPackage
     * @param AccessPackage $body Request body
     * @return AccessPackage
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AccessPackage $body): AccessPackage
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AccessPackage
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
        return new AccessPackage($data);
    }
    /**
     * Delete accessPackage
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
     * Navigate to accessPackagesIncompatibleWith
     *
     * @return AccessPackagesIncompatibleWithRequestBuilder
     */
    public function accessPackagesIncompatibleWith(): AccessPackagesIncompatibleWithRequestBuilder
    {
        return new AccessPackagesIncompatibleWithRequestBuilder($this->client, $this->requestUrl . '/accessPackagesIncompatibleWith');
    }
    /**
     * Navigate to assignmentPolicies
     *
     * @return AssignmentPoliciesRequestBuilder
     */
    public function assignmentPolicies(): AssignmentPoliciesRequestBuilder
    {
        return new AssignmentPoliciesRequestBuilder($this->client, $this->requestUrl . '/assignmentPolicies');
    }
    /**
     * Navigate to catalog
     *
     * @return CatalogRequestBuilder
     */
    public function catalog(): CatalogRequestBuilder
    {
        return new CatalogRequestBuilder($this->client, $this->requestUrl . '/catalog');
    }
    /**
     * Navigate to incompatibleAccessPackages
     *
     * @return IncompatibleAccessPackagesRequestBuilder
     */
    public function incompatibleAccessPackages(): IncompatibleAccessPackagesRequestBuilder
    {
        return new IncompatibleAccessPackagesRequestBuilder($this->client, $this->requestUrl . '/incompatibleAccessPackages');
    }
    /**
     * Navigate to incompatibleGroups
     *
     * @return IncompatibleGroupsRequestBuilder
     */
    public function incompatibleGroups(): IncompatibleGroupsRequestBuilder
    {
        return new IncompatibleGroupsRequestBuilder($this->client, $this->requestUrl . '/incompatibleGroups');
    }
    /**
     * Navigate to getApplicablePolicyRequirements
     *
     * @return GetApplicablePolicyRequirementsRequestBuilder
     */
    public function getApplicablePolicyRequirements(): GetApplicablePolicyRequirementsRequestBuilder
    {
        return new GetApplicablePolicyRequirementsRequestBuilder($this->client, $this->requestUrl . '/getApplicablePolicyRequirements');
    }
    /**
     * Navigate to resourceRoleScopes
     *
     * @return ResourceRoleScopesRequestBuilder
     */
    public function resourceRoleScopes(): ResourceRoleScopesRequestBuilder
    {
        return new ResourceRoleScopesRequestBuilder($this->client, $this->requestUrl . '/resourceRoleScopes');
    }
}

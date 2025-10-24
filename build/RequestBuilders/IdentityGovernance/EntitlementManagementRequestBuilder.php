<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EntitlementManagement;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AccessPackageAssignmentApprovalsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AccessPackagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AssignmentPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AssignmentRequestsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\CatalogsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\ConnectedOrganizationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\ResourceEnvironmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\ResourceRequestsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\ResourceRoleScopesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\ResourcesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\SettingsRequestBuilder;

/**
 * Request builder for /identityGovernance/entitlementManagement
 */
class EntitlementManagementRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get entitlementManagement from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return EntitlementManagement
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): EntitlementManagement
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
     * Deserialize response to EntitlementManagement
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
        return new EntitlementManagement($data);
    }
    /**
     * Update the navigation property entitlementManagement in identityGovernance
     * @param EntitlementManagement $body Request body
     * @return EntitlementManagement
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(EntitlementManagement $body): EntitlementManagement
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to EntitlementManagement
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
        return new EntitlementManagement($data);
    }
    /**
     * Delete navigation property entitlementManagement for identityGovernance
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
     * Navigate to accessPackageAssignmentApprovals
     *
     * @return AccessPackageAssignmentApprovalsRequestBuilder
     */
    public function accessPackageAssignmentApprovals(): AccessPackageAssignmentApprovalsRequestBuilder
    {
        return new AccessPackageAssignmentApprovalsRequestBuilder($this->client, $this->requestUrl . '/accessPackageAssignmentApprovals');
    }
    /**
     * Navigate to accessPackages
     *
     * @return AccessPackagesRequestBuilder
     */
    public function accessPackages(): AccessPackagesRequestBuilder
    {
        return new AccessPackagesRequestBuilder($this->client, $this->requestUrl . '/accessPackages');
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
     * Navigate to assignmentRequests
     *
     * @return AssignmentRequestsRequestBuilder
     */
    public function assignmentRequests(): AssignmentRequestsRequestBuilder
    {
        return new AssignmentRequestsRequestBuilder($this->client, $this->requestUrl . '/assignmentRequests');
    }
    /**
     * Navigate to assignments
     *
     * @return AssignmentsRequestBuilder
     */
    public function assignments(): AssignmentsRequestBuilder
    {
        return new AssignmentsRequestBuilder($this->client, $this->requestUrl . '/assignments');
    }
    /**
     * Navigate to catalogs
     *
     * @return CatalogsRequestBuilder
     */
    public function catalogs(): CatalogsRequestBuilder
    {
        return new CatalogsRequestBuilder($this->client, $this->requestUrl . '/catalogs');
    }
    /**
     * Navigate to connectedOrganizations
     *
     * @return ConnectedOrganizationsRequestBuilder
     */
    public function connectedOrganizations(): ConnectedOrganizationsRequestBuilder
    {
        return new ConnectedOrganizationsRequestBuilder($this->client, $this->requestUrl . '/connectedOrganizations');
    }
    /**
     * Navigate to resourceEnvironments
     *
     * @return ResourceEnvironmentsRequestBuilder
     */
    public function resourceEnvironments(): ResourceEnvironmentsRequestBuilder
    {
        return new ResourceEnvironmentsRequestBuilder($this->client, $this->requestUrl . '/resourceEnvironments');
    }
    /**
     * Navigate to resourceRequests
     *
     * @return ResourceRequestsRequestBuilder
     */
    public function resourceRequests(): ResourceRequestsRequestBuilder
    {
        return new ResourceRequestsRequestBuilder($this->client, $this->requestUrl . '/resourceRequests');
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
    /**
     * Navigate to resources
     *
     * @return ResourcesRequestBuilder
     */
    public function resources(): ResourcesRequestBuilder
    {
        return new ResourcesRequestBuilder($this->client, $this->requestUrl . '/resources');
    }
    /**
     * Navigate to settings
     *
     * @return SettingsRequestBuilder
     */
    public function settings(): SettingsRequestBuilder
    {
        return new SettingsRequestBuilder($this->client, $this->requestUrl . '/settings');
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\EntitlementManagement\Catalogs;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessPackageCatalog;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\EntitlementManagement\Catalogs\AccessPackagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\EntitlementManagement\Catalogs\CustomWorkflowExtensionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\EntitlementManagement\Catalogs\ResourceRolesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\EntitlementManagement\Catalogs\ResourcesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\EntitlementManagement\Catalogs\ResourceScopesRequestBuilder;

/**
 * Request builder for /identityGovernance/entitlementManagement/catalogs/{accessPackageCatalog-id}
 */
class AccessPackageCatalogRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get accessPackageCatalog
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AccessPackageCatalog
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AccessPackageCatalog
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
     * Deserialize response to AccessPackageCatalog
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
        return new AccessPackageCatalog($data);
    }
    /**
     * Update accessPackageCatalog
     * @param AccessPackageCatalog $body Request body
     * @return AccessPackageCatalog
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AccessPackageCatalog $body): AccessPackageCatalog
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AccessPackageCatalog
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
        return new AccessPackageCatalog($data);
    }
    /**
     * Delete accessPackageCatalog
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
     * Navigate to accessPackages
     *
     * @return AccessPackagesRequestBuilder
     */
    public function accessPackages(): AccessPackagesRequestBuilder
    {
        return new AccessPackagesRequestBuilder($this->client, $this->requestUrl . '/accessPackages');
    }
    /**
     * Navigate to customWorkflowExtensions
     *
     * @return CustomWorkflowExtensionsRequestBuilder
     */
    public function customWorkflowExtensions(): CustomWorkflowExtensionsRequestBuilder
    {
        return new CustomWorkflowExtensionsRequestBuilder($this->client, $this->requestUrl . '/customWorkflowExtensions');
    }
    /**
     * Navigate to resourceRoles
     *
     * @return ResourceRolesRequestBuilder
     */
    public function resourceRoles(): ResourceRolesRequestBuilder
    {
        return new ResourceRolesRequestBuilder($this->client, $this->requestUrl . '/resourceRoles');
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
     * Navigate to resourceScopes
     *
     * @return ResourceScopesRequestBuilder
     */
    public function resourceScopes(): ResourceScopesRequestBuilder
    {
        return new ResourceScopesRequestBuilder($this->client, $this->requestUrl . '/resourceScopes');
    }
}

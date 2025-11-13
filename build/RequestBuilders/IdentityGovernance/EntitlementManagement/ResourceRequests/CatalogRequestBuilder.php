<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\ResourceRequests;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessPackageCatalog;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\ResourceRequests\Catalog\AccessPackagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\ResourceRequests\Catalog\CustomWorkflowExtensionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\ResourceRequests\Catalog\ResourceRolesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\ResourceRequests\Catalog\ResourcesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\ResourceRequests\Catalog\ResourceScopesRequestBuilder;

/**
 * Request builder for /identityGovernance/entitlementManagement/resourceRequests/{accessPackageResourceRequest-id}/catalog
 */
class CatalogRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get catalog from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AccessPackageCatalog|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AccessPackageCatalog|null
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
     * Deserialize response to AccessPackageCatalog|null
     */
    private function deserializeGet(string $body): AccessPackageCatalog|null    {
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
     * Update the navigation property catalog in identityGovernance
     * @param AccessPackageCatalog $body Request body
     * @return AccessPackageCatalog|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AccessPackageCatalog $body): AccessPackageCatalog|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AccessPackageCatalog|null
     */
    private function deserializePatch(string $body): AccessPackageCatalog|null    {
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
     * Delete navigation property catalog for identityGovernance
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
    private function deserializeDelete(string $body): mixed    {
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

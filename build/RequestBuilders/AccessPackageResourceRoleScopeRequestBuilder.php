<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessPackageResourceRoleScope;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoleRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ScopeRequestBuilder;

/**
 * Request builder for {accessPackageResourceRoleScope-id}
 */
class AccessPackageResourceRoleScopeRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get resourceRoleScopes from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AccessPackageResourceRoleScope
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AccessPackageResourceRoleScope
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to AccessPackageResourceRoleScope
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
        return new AccessPackageResourceRoleScope($data);
    }
    /**
     * Update the navigation property resourceRoleScopes in identityGovernance
     * @param AccessPackageResourceRoleScope $body Request body
     * @return AccessPackageResourceRoleScope
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AccessPackageResourceRoleScope $body): AccessPackageResourceRoleScope
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AccessPackageResourceRoleScope
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
        return new AccessPackageResourceRoleScope($data);
    }
    /**
     * Remove resourceRoleScope from an accessPackage
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
     * Navigate to role
     *
     * @return RoleRequestBuilder
     */
    public function role(): RoleRequestBuilder
    {
        return new RoleRequestBuilder($this->client, $this->requestUrl . '/role');
    }
    /**
     * Navigate to scope
     *
     * @return ScopeRequestBuilder
     */
    public function scope(): ScopeRequestBuilder
    {
        return new ScopeRequestBuilder($this->client, $this->requestUrl . '/scope');
    }
}

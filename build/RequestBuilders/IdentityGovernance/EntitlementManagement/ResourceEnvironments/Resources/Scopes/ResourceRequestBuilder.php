<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\ResourceEnvironments\Resources\Scopes;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessPackageResource;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\ResourceEnvironments\Resources\Scopes\Resource\EnvironmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\ResourceEnvironments\Resources\Scopes\Resource\RefreshRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\ResourceEnvironments\Resources\Scopes\Resource\RolesRequestBuilder;

/**
 * Request builder for /identityGovernance/entitlementManagement/resourceEnvironments/{accessPackageResourceEnvironment-id}/resources/{accessPackageResource-id}/scopes/{accessPackageResourceScope-id}/resource
 */
class ResourceRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get resource from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AccessPackageResource|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AccessPackageResource|null
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
     * Deserialize response to AccessPackageResource|null
     */
    private function deserializeGet(string $body): AccessPackageResource|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AccessPackageResource($data);
    }
    /**
     * Update the navigation property resource in identityGovernance
     * @param AccessPackageResource $body Request body
     * @return AccessPackageResource|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AccessPackageResource $body): AccessPackageResource|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AccessPackageResource|null
     */
    private function deserializePatch(string $body): AccessPackageResource|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AccessPackageResource($data);
    }
    /**
     * Delete navigation property resource for identityGovernance
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
     * Navigate to environment
     *
     * @return EnvironmentRequestBuilder
     */
    public function environment(): EnvironmentRequestBuilder
    {
        return new EnvironmentRequestBuilder($this->client, $this->requestUrl . '/environment');
    }
    /**
     * Navigate to refresh
     *
     * @return RefreshRequestBuilder
     */
    public function refresh(): RefreshRequestBuilder
    {
        return new RefreshRequestBuilder($this->client, $this->requestUrl . '/refresh');
    }
    /**
     * Navigate to roles
     *
     * @return RolesRequestBuilder
     */
    public function roles(): RolesRequestBuilder
    {
        return new RolesRequestBuilder($this->client, $this->requestUrl . '/roles');
    }
}

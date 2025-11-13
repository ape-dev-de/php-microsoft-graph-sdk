<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\CrossTenantAccessPolicy\Templates;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MultiTenantOrganizationIdentitySyncPolicyTemplate;

/**
 * Request builder for /policies/crossTenantAccessPolicy/templates/multiTenantOrganizationIdentitySynchronization
 */
class MultiTenantOrganizationIdentitySynchronizationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get multiTenantOrganizationIdentitySyncPolicyTemplate
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return MultiTenantOrganizationIdentitySyncPolicyTemplate|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): MultiTenantOrganizationIdentitySyncPolicyTemplate|null
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
     * Deserialize response to MultiTenantOrganizationIdentitySyncPolicyTemplate|null
     */
    private function deserializeGet(string $body): MultiTenantOrganizationIdentitySyncPolicyTemplate|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MultiTenantOrganizationIdentitySyncPolicyTemplate($data);
    }
    /**
     * Update multiTenantOrganizationIdentitySyncPolicyTemplate
     * @param MultiTenantOrganizationIdentitySyncPolicyTemplate $body Request body
     * @return MultiTenantOrganizationIdentitySyncPolicyTemplate|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(MultiTenantOrganizationIdentitySyncPolicyTemplate $body): MultiTenantOrganizationIdentitySyncPolicyTemplate|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to MultiTenantOrganizationIdentitySyncPolicyTemplate|null
     */
    private function deserializePatch(string $body): MultiTenantOrganizationIdentitySyncPolicyTemplate|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MultiTenantOrganizationIdentitySyncPolicyTemplate($data);
    }
    /**
     * Delete navigation property multiTenantOrganizationIdentitySynchronization for policies
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
}

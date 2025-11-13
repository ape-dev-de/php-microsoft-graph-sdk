<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\CrossTenantAccessPolicy\Partners;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CrossTenantIdentitySyncPolicyPartner;

/**
 * Request builder for /policies/crossTenantAccessPolicy/partners/{crossTenantAccessPolicyConfigurationPartner-tenantId}/identitySynchronization
 */
class IdentitySynchronizationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get crossTenantIdentitySyncPolicyPartner
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return CrossTenantIdentitySyncPolicyPartner|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): CrossTenantIdentitySyncPolicyPartner|null
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
     * Deserialize response to CrossTenantIdentitySyncPolicyPartner|null
     */
    private function deserializeGet(string $body): CrossTenantIdentitySyncPolicyPartner|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new CrossTenantIdentitySyncPolicyPartner($data);
    }
    /**
     * Update crossTenantIdentitySyncPolicyPartner
     * @param CrossTenantIdentitySyncPolicyPartner $body Request body
     * @return CrossTenantIdentitySyncPolicyPartner|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function put(CrossTenantIdentitySyncPolicyPartner $body): CrossTenantIdentitySyncPolicyPartner|null
    {
        $response = $this->client->put($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePut($responseBody);
    }

    /**
     * Deserialize response to CrossTenantIdentitySyncPolicyPartner|null
     */
    private function deserializePut(string $body): CrossTenantIdentitySyncPolicyPartner|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new CrossTenantIdentitySyncPolicyPartner($data);
    }
    /**
     * Delete crossTenantIdentitySyncPolicyPartner
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

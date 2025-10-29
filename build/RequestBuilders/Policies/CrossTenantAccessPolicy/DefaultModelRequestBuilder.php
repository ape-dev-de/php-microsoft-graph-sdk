<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\CrossTenantAccessPolicy;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CrossTenantAccessPolicyConfigurationDefault;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\CrossTenantAccessPolicy\Default\ResetToSystemDefaultRequestBuilder;

/**
 * Request builder for /policies/crossTenantAccessPolicy/default
 */
class DefaultModelRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get crossTenantAccessPolicyConfigurationDefault
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return CrossTenantAccessPolicyConfigurationDefault
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): CrossTenantAccessPolicyConfigurationDefault
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
     * Deserialize response to CrossTenantAccessPolicyConfigurationDefault
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
        return new CrossTenantAccessPolicyConfigurationDefault($data);
    }
    /**
     * Update crossTenantAccessPolicyConfigurationDefault
     * @param CrossTenantAccessPolicyConfigurationDefault $body Request body
     * @return CrossTenantAccessPolicyConfigurationDefault
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(CrossTenantAccessPolicyConfigurationDefault $body): CrossTenantAccessPolicyConfigurationDefault
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to CrossTenantAccessPolicyConfigurationDefault
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
        return new CrossTenantAccessPolicyConfigurationDefault($data);
    }
    /**
     * Delete navigation property default for policies
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
     * Navigate to resetToSystemDefault
     *
     * @return ResetToSystemDefaultRequestBuilder
     */
    public function resetToSystemDefault(): ResetToSystemDefaultRequestBuilder
    {
        return new ResetToSystemDefaultRequestBuilder($this->client, $this->requestUrl . '/resetToSystemDefault');
    }
}

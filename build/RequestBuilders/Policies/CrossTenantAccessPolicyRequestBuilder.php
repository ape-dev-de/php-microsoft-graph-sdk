<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CrossTenantAccessPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\CrossTenantAccessPolicy\DefaultModelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\CrossTenantAccessPolicy\PartnersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\CrossTenantAccessPolicy\TemplatesRequestBuilder;

/**
 * Request builder for /policies/crossTenantAccessPolicy
 */
class CrossTenantAccessPolicyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get crossTenantAccessPolicy
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return CrossTenantAccessPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): CrossTenantAccessPolicy
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
     * Deserialize response to CrossTenantAccessPolicy
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
        return new CrossTenantAccessPolicy($data);
    }
    /**
     * Update crossTenantAccessPolicy
     * @param CrossTenantAccessPolicy $body Request body
     * @return CrossTenantAccessPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(CrossTenantAccessPolicy $body): CrossTenantAccessPolicy
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to CrossTenantAccessPolicy
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
        return new CrossTenantAccessPolicy($data);
    }
    /**
     * Delete navigation property crossTenantAccessPolicy for policies
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
     * Navigate to default
     *
     * @return DefaultModelRequestBuilder
     */
    public function defaultModel(): DefaultModelRequestBuilder
    {
        return new DefaultModelRequestBuilder($this->client, $this->requestUrl . '/default');
    }
    /**
     * Navigate to partners
     *
     * @return PartnersRequestBuilder
     */
    public function partners(): PartnersRequestBuilder
    {
        return new PartnersRequestBuilder($this->client, $this->requestUrl . '/partners');
    }
    /**
     * Navigate to templates
     *
     * @return TemplatesRequestBuilder
     */
    public function templates(): TemplatesRequestBuilder
    {
        return new TemplatesRequestBuilder($this->client, $this->requestUrl . '/templates');
    }
}

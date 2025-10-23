<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PermissionGrantPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ExcludesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IncludesRequestBuilder;

/**
 * Request builder for {permissionGrantPolicy-id}
 */
class PermissionGrantPolicyRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get permissionGrantPolicy
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PermissionGrantPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PermissionGrantPolicy
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
     * Deserialize response to PermissionGrantPolicy
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
        return new PermissionGrantPolicy($data);
    }
    /**
     * Update permissionGrantPolicy
     * @param PermissionGrantPolicy $body Request body
     * @return PermissionGrantPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(PermissionGrantPolicy $body): PermissionGrantPolicy
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PermissionGrantPolicy
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
        return new PermissionGrantPolicy($data);
    }
    /**
     * Delete permissionGrantPolicy
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
     * Navigate to excludes
     *
     * @return ExcludesRequestBuilder
     */
    public function excludes(): ExcludesRequestBuilder
    {
        return new ExcludesRequestBuilder($this->client, $this->requestUrl . '/excludes');
    }
    /**
     * Navigate to includes
     *
     * @return IncludesRequestBuilder
     */
    public function includes(): IncludesRequestBuilder
    {
        return new IncludesRequestBuilder($this->client, $this->requestUrl . '/includes');
    }
}

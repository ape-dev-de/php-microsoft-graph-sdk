<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationStrengthPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CombinationConfigurationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UpdateAllowedCombinationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UsageRequestBuilder;

/**
 * Request builder for {authenticationStrengthPolicy-id}
 */
class AuthenticationStrengthPolicyRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get policies from identity
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AuthenticationStrengthPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AuthenticationStrengthPolicy
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to AuthenticationStrengthPolicy
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
        return new AuthenticationStrengthPolicy($data);
    }
    /**
     * Update the navigation property policies in identity
     * @param AuthenticationStrengthPolicy $body Request body
     * @return AuthenticationStrengthPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AuthenticationStrengthPolicy $body): AuthenticationStrengthPolicy
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AuthenticationStrengthPolicy
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
        return new AuthenticationStrengthPolicy($data);
    }
    /**
     * Delete navigation property policies for identity
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null) {
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
     * Navigate to combinationConfigurations
     *
     * @return CombinationConfigurationsRequestBuilder
     */
    public function combinationConfigurations(): CombinationConfigurationsRequestBuilder
    {
        return new CombinationConfigurationsRequestBuilder($this->client, $this->requestUrl . '/combinationConfigurations');
    }
    /**
     * Navigate to updateAllowedCombinations
     *
     * @return UpdateAllowedCombinationsRequestBuilder
     */
    public function updateAllowedCombinations(): UpdateAllowedCombinationsRequestBuilder
    {
        return new UpdateAllowedCombinationsRequestBuilder($this->client, $this->requestUrl . '/updateAllowedCombinations');
    }
    /**
     * Navigate to usage()
     *
     * @return UsageRequestBuilder
     */
    public function usage(): UsageRequestBuilder
    {
        return new UsageRequestBuilder($this->client, $this->requestUrl . '/usage()');
    }
}

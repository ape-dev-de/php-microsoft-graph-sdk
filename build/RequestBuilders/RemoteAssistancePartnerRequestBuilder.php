<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\RemoteAssistancePartner;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BeginOnboardingRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DisconnectRequestBuilder;

/**
 * Request builder for {remoteAssistancePartner-id}
 */
class RemoteAssistancePartnerRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get remoteAssistancePartner
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return RemoteAssistancePartner
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): RemoteAssistancePartner
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
     * Deserialize response to RemoteAssistancePartner
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
        return new RemoteAssistancePartner($data);
    }
    /**
     * Update remoteAssistancePartner
     * @param RemoteAssistancePartner $body Request body
     * @return RemoteAssistancePartner
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(RemoteAssistancePartner $body): RemoteAssistancePartner
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to RemoteAssistancePartner
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
        return new RemoteAssistancePartner($data);
    }
    /**
     * Delete remoteAssistancePartner
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
     * Navigate to beginOnboarding
     *
     * @return BeginOnboardingRequestBuilder
     */
    public function beginOnboarding(): BeginOnboardingRequestBuilder
    {
        return new BeginOnboardingRequestBuilder($this->client, $this->requestUrl . '/beginOnboarding');
    }
    /**
     * Navigate to disconnect
     *
     * @return DisconnectRequestBuilder
     */
    public function disconnect(): DisconnectRequestBuilder
    {
        return new DisconnectRequestBuilder($this->client, $this->requestUrl . '/disconnect');
    }
}

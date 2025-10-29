<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\RemoteAssistancePartners;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\RemoteAssistancePartner;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\RemoteAssistancePartners\BeginOnboardingRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\RemoteAssistancePartners\DisconnectRequestBuilder;

/**
 * Request builder for /deviceManagement/remoteAssistancePartners/{remoteAssistancePartner-id}
 */
class RemoteAssistancePartnerRequestBuilder extends RootBaseRequestBuilder
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
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
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

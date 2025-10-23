<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\VirtualEventRegistration;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CancelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SessionsRequestBuilder;

/**
 * Request builder for {virtualEventRegistration-id}
 */
class VirtualEventRegistrationRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get virtualEventRegistration
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return VirtualEventRegistration
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): VirtualEventRegistration
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
     * Deserialize response to VirtualEventRegistration
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
        return new VirtualEventRegistration($data);
    }
    /**
     * Update the navigation property registrations in solutions
     * @param VirtualEventRegistration $body Request body
     * @return VirtualEventRegistration
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(VirtualEventRegistration $body): VirtualEventRegistration
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to VirtualEventRegistration
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
        return new VirtualEventRegistration($data);
    }
    /**
     * Delete navigation property registrations for solutions
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
     * Navigate to cancel
     *
     * @return CancelRequestBuilder
     */
    public function cancel(): CancelRequestBuilder
    {
        return new CancelRequestBuilder($this->client, $this->requestUrl . '/cancel');
    }
    /**
     * Navigate to sessions
     *
     * @return SessionsRequestBuilder
     */
    public function sessions(): SessionsRequestBuilder
    {
        return new SessionsRequestBuilder($this->client, $this->requestUrl . '/sessions');
    }
}

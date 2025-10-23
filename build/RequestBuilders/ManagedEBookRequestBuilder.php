<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ManagedEBook;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceStatesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\InstallSummaryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AssignRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UserStateSummaryRequestBuilder;

/**
 * Request builder for {managedEBook-id}
 */
class ManagedEBookRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get iosVppEBook
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ManagedEBook
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ManagedEBook
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
     * Deserialize response to ManagedEBook
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
        return new ManagedEBook($data);
    }
    /**
     * Update iosVppEBook
     * @param ManagedEBook $body Request body
     * @return ManagedEBook
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ManagedEBook $body): ManagedEBook
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ManagedEBook
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
        return new ManagedEBook($data);
    }
    /**
     * Delete iosVppEBook
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
     * Navigate to assignments
     *
     * @return AssignmentsRequestBuilder
     */
    public function assignments(): AssignmentsRequestBuilder
    {
        return new AssignmentsRequestBuilder($this->client, $this->requestUrl . '/assignments');
    }
    /**
     * Navigate to deviceStates
     *
     * @return DeviceStatesRequestBuilder
     */
    public function deviceStates(): DeviceStatesRequestBuilder
    {
        return new DeviceStatesRequestBuilder($this->client, $this->requestUrl . '/deviceStates');
    }
    /**
     * Navigate to installSummary
     *
     * @return InstallSummaryRequestBuilder
     */
    public function installSummary(): InstallSummaryRequestBuilder
    {
        return new InstallSummaryRequestBuilder($this->client, $this->requestUrl . '/installSummary');
    }
    /**
     * Navigate to assign
     *
     * @return AssignRequestBuilder
     */
    public function assign(): AssignRequestBuilder
    {
        return new AssignRequestBuilder($this->client, $this->requestUrl . '/assign');
    }
    /**
     * Navigate to userStateSummary
     *
     * @return UserStateSummaryRequestBuilder
     */
    public function userStateSummary(): UserStateSummaryRequestBuilder
    {
        return new UserStateSummaryRequestBuilder($this->client, $this->requestUrl . '/userStateSummary');
    }
}

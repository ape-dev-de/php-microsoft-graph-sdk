<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\MdmWindowsInformationProtectionPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ExemptAppLockerFilesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ProtectedAppLockerFilesRequestBuilder;

/**
 * Request builder for {mdmWindowsInformationProtectionPolicy-id}
 */
class MdmWindowsInformationProtectionPolicyRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get mdmWindowsInformationProtectionPolicy
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return MdmWindowsInformationProtectionPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): MdmWindowsInformationProtectionPolicy
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
     * Deserialize response to MdmWindowsInformationProtectionPolicy
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
        return new MdmWindowsInformationProtectionPolicy($data);
    }
    /**
     * Update mdmWindowsInformationProtectionPolicy
     * @param MdmWindowsInformationProtectionPolicy $body Request body
     * @return MdmWindowsInformationProtectionPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(MdmWindowsInformationProtectionPolicy $body): MdmWindowsInformationProtectionPolicy
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to MdmWindowsInformationProtectionPolicy
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
        return new MdmWindowsInformationProtectionPolicy($data);
    }
    /**
     * Delete mdmWindowsInformationProtectionPolicy
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
     * Navigate to assignments
     *
     * @return AssignmentsRequestBuilder
     */
    public function assignments(): AssignmentsRequestBuilder
    {
        return new AssignmentsRequestBuilder($this->client, $this->requestUrl . '/assignments');
    }
    /**
     * Navigate to exemptAppLockerFiles
     *
     * @return ExemptAppLockerFilesRequestBuilder
     */
    public function exemptAppLockerFiles(): ExemptAppLockerFilesRequestBuilder
    {
        return new ExemptAppLockerFilesRequestBuilder($this->client, $this->requestUrl . '/exemptAppLockerFiles');
    }
    /**
     * Navigate to protectedAppLockerFiles
     *
     * @return ProtectedAppLockerFilesRequestBuilder
     */
    public function protectedAppLockerFiles(): ProtectedAppLockerFilesRequestBuilder
    {
        return new ProtectedAppLockerFilesRequestBuilder($this->client, $this->requestUrl . '/protectedAppLockerFiles');
    }
}

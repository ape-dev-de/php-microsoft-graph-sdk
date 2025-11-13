<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MdmWindowsInformationProtectionPolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MdmWindowsInformationProtectionPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MdmWindowsInformationProtectionPolicies\AssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MdmWindowsInformationProtectionPolicies\ExemptAppLockerFilesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MdmWindowsInformationProtectionPolicies\ProtectedAppLockerFilesRequestBuilder;

/**
 * Request builder for /deviceAppManagement/mdmWindowsInformationProtectionPolicies/{mdmWindowsInformationProtectionPolicy-id}
 */
class MdmWindowsInformationProtectionPolicyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get mdmWindowsInformationProtectionPolicy
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return MdmWindowsInformationProtectionPolicy|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): MdmWindowsInformationProtectionPolicy|null
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
     * Deserialize response to MdmWindowsInformationProtectionPolicy|null
     */
    private function deserializeGet(string $body): MdmWindowsInformationProtectionPolicy|null    {
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
     * @return MdmWindowsInformationProtectionPolicy|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(MdmWindowsInformationProtectionPolicy $body): MdmWindowsInformationProtectionPolicy|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to MdmWindowsInformationProtectionPolicy|null
     */
    private function deserializePatch(string $body): MdmWindowsInformationProtectionPolicy|null    {
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

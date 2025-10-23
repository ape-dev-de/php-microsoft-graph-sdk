<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessPackageAssignment;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AccessPackageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AssignmentPolicyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ReprocessRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TargetRequestBuilder;

/**
 * Request builder for {accessPackageAssignment-id}
 */
class AccessPackageAssignmentRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get accessPackageAssignment
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AccessPackageAssignment
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AccessPackageAssignment
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
     * Deserialize response to AccessPackageAssignment
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
        return new AccessPackageAssignment($data);
    }
    /**
     * Update the navigation property assignments in identityGovernance
     * @param AccessPackageAssignment $body Request body
     * @return AccessPackageAssignment
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AccessPackageAssignment $body): AccessPackageAssignment
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AccessPackageAssignment
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
        return new AccessPackageAssignment($data);
    }
    /**
     * Delete navigation property assignments for identityGovernance
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
     * Navigate to accessPackage
     *
     * @return AccessPackageRequestBuilder
     */
    public function accessPackage(): AccessPackageRequestBuilder
    {
        return new AccessPackageRequestBuilder($this->client, $this->requestUrl . '/accessPackage');
    }
    /**
     * Navigate to assignmentPolicy
     *
     * @return AssignmentPolicyRequestBuilder
     */
    public function assignmentPolicy(): AssignmentPolicyRequestBuilder
    {
        return new AssignmentPolicyRequestBuilder($this->client, $this->requestUrl . '/assignmentPolicy');
    }
    /**
     * Navigate to reprocess
     *
     * @return ReprocessRequestBuilder
     */
    public function reprocess(): ReprocessRequestBuilder
    {
        return new ReprocessRequestBuilder($this->client, $this->requestUrl . '/reprocess');
    }
    /**
     * Navigate to target
     *
     * @return TargetRequestBuilder
     */
    public function target(): TargetRequestBuilder
    {
        return new TargetRequestBuilder($this->client, $this->requestUrl . '/target');
    }
}

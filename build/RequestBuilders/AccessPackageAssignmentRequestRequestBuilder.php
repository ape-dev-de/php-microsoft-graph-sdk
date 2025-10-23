<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessPackageAssignmentRequest;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AccessPackageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AssignmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CancelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ReprocessRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ResumeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RequestorRequestBuilder;

/**
 * Request builder for {accessPackageAssignmentRequest-id}
 */
class AccessPackageAssignmentRequestRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get accessPackageAssignmentRequest
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AccessPackageAssignmentRequest
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AccessPackageAssignmentRequest
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
     * Deserialize response to AccessPackageAssignmentRequest
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
        return new AccessPackageAssignmentRequest($data);
    }
    /**
     * Update the navigation property assignmentRequests in identityGovernance
     * @param AccessPackageAssignmentRequest $body Request body
     * @return AccessPackageAssignmentRequest
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AccessPackageAssignmentRequest $body): AccessPackageAssignmentRequest
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AccessPackageAssignmentRequest
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
        return new AccessPackageAssignmentRequest($data);
    }
    /**
     * Delete accessPackageAssignmentRequest
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
     * Navigate to assignment
     *
     * @return AssignmentRequestBuilder
     */
    public function assignment(): AssignmentRequestBuilder
    {
        return new AssignmentRequestBuilder($this->client, $this->requestUrl . '/assignment');
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
     * Navigate to reprocess
     *
     * @return ReprocessRequestBuilder
     */
    public function reprocess(): ReprocessRequestBuilder
    {
        return new ReprocessRequestBuilder($this->client, $this->requestUrl . '/reprocess');
    }
    /**
     * Navigate to resume
     *
     * @return ResumeRequestBuilder
     */
    public function resume(): ResumeRequestBuilder
    {
        return new ResumeRequestBuilder($this->client, $this->requestUrl . '/resume');
    }
    /**
     * Navigate to requestor
     *
     * @return RequestorRequestBuilder
     */
    public function requestor(): RequestorRequestBuilder
    {
        return new RequestorRequestBuilder($this->client, $this->requestUrl . '/requestor');
    }
}

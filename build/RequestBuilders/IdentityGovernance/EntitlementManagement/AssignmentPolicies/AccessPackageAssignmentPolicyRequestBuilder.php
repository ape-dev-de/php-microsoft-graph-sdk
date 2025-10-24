<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AssignmentPolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessPackageAssignmentPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AssignmentPolicies\AccessPackageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AssignmentPolicies\CatalogRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AssignmentPolicies\CustomExtensionStageSettingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AssignmentPolicies\QuestionsRequestBuilder;

/**
 * Request builder for /identityGovernance/entitlementManagement/assignmentPolicies/{accessPackageAssignmentPolicy-id}
 */
class AccessPackageAssignmentPolicyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get accessPackageAssignmentPolicy
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AccessPackageAssignmentPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AccessPackageAssignmentPolicy
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
     * Deserialize response to AccessPackageAssignmentPolicy
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
        return new AccessPackageAssignmentPolicy($data);
    }
    /**
     * Update accessPackageAssignmentPolicy
     * @param AccessPackageAssignmentPolicy $body Request body
     * @return AccessPackageAssignmentPolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function put(AccessPackageAssignmentPolicy $body): AccessPackageAssignmentPolicy
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->put($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePut($responseBody);
    }

    /**
     * Deserialize response to AccessPackageAssignmentPolicy
     */
    private function deserializePut(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new AccessPackageAssignmentPolicy($data);
    }
    /**
     * Delete accessPackageAssignmentPolicy
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
     * Navigate to catalog
     *
     * @return CatalogRequestBuilder
     */
    public function catalog(): CatalogRequestBuilder
    {
        return new CatalogRequestBuilder($this->client, $this->requestUrl . '/catalog');
    }
    /**
     * Navigate to customExtensionStageSettings
     *
     * @return CustomExtensionStageSettingsRequestBuilder
     */
    public function customExtensionStageSettings(): CustomExtensionStageSettingsRequestBuilder
    {
        return new CustomExtensionStageSettingsRequestBuilder($this->client, $this->requestUrl . '/customExtensionStageSettings');
    }
    /**
     * Navigate to questions
     *
     * @return QuestionsRequestBuilder
     */
    public function questions(): QuestionsRequestBuilder
    {
        return new QuestionsRequestBuilder($this->client, $this->requestUrl . '/questions');
    }
}

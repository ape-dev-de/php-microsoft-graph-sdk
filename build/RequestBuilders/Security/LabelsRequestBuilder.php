<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityLabelsRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\AuthoritiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\CategoriesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\CitationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\DepartmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\FilePlanReferencesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\RetentionLabelsRequestBuilder;

/**
 * Request builder for /security/labels
 */
class LabelsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get labels from security
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityLabelsRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityLabelsRoot
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
     * Deserialize response to SecurityLabelsRoot
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
        return new SecurityLabelsRoot($data);
    }
    /**
     * Update the navigation property labels in security
     * @param SecurityLabelsRoot $body Request body
     * @return SecurityLabelsRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityLabelsRoot $body): SecurityLabelsRoot
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityLabelsRoot
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
        return new SecurityLabelsRoot($data);
    }
    /**
     * Delete navigation property labels for security
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
     * Navigate to authorities
     *
     * @return AuthoritiesRequestBuilder
     */
    public function authorities(): AuthoritiesRequestBuilder
    {
        return new AuthoritiesRequestBuilder($this->client, $this->requestUrl . '/authorities');
    }
    /**
     * Navigate to categories
     *
     * @return CategoriesRequestBuilder
     */
    public function categories(): CategoriesRequestBuilder
    {
        return new CategoriesRequestBuilder($this->client, $this->requestUrl . '/categories');
    }
    /**
     * Navigate to citations
     *
     * @return CitationsRequestBuilder
     */
    public function citations(): CitationsRequestBuilder
    {
        return new CitationsRequestBuilder($this->client, $this->requestUrl . '/citations');
    }
    /**
     * Navigate to departments
     *
     * @return DepartmentsRequestBuilder
     */
    public function departments(): DepartmentsRequestBuilder
    {
        return new DepartmentsRequestBuilder($this->client, $this->requestUrl . '/departments');
    }
    /**
     * Navigate to filePlanReferences
     *
     * @return FilePlanReferencesRequestBuilder
     */
    public function filePlanReferences(): FilePlanReferencesRequestBuilder
    {
        return new FilePlanReferencesRequestBuilder($this->client, $this->requestUrl . '/filePlanReferences');
    }
    /**
     * Navigate to retentionLabels
     *
     * @return RetentionLabelsRequestBuilder
     */
    public function retentionLabels(): RetentionLabelsRequestBuilder
    {
        return new RetentionLabelsRequestBuilder($this->client, $this->requestUrl . '/retentionLabels');
    }
}

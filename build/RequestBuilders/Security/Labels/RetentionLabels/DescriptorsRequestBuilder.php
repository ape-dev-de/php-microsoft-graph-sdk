<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\RetentionLabels;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityFilePlanDescriptor;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\RetentionLabels\Descriptors\AuthorityTemplateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\RetentionLabels\Descriptors\CategoryTemplateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\RetentionLabels\Descriptors\CitationTemplateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\RetentionLabels\Descriptors\DepartmentTemplateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\RetentionLabels\Descriptors\FilePlanReferenceTemplateRequestBuilder;

/**
 * Request builder for /security/labels/retentionLabels/{retentionLabel-id}/descriptors
 */
class DescriptorsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get descriptors from security
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityFilePlanDescriptor
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityFilePlanDescriptor
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
     * Deserialize response to SecurityFilePlanDescriptor
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
        return new SecurityFilePlanDescriptor($data);
    }
    /**
     * Update the navigation property descriptors in security
     * @param SecurityFilePlanDescriptor $body Request body
     * @return SecurityFilePlanDescriptor
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityFilePlanDescriptor $body): SecurityFilePlanDescriptor
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityFilePlanDescriptor
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
        return new SecurityFilePlanDescriptor($data);
    }
    /**
     * Delete navigation property descriptors for security
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
     * Navigate to authorityTemplate
     *
     * @return AuthorityTemplateRequestBuilder
     */
    public function authorityTemplate(): AuthorityTemplateRequestBuilder
    {
        return new AuthorityTemplateRequestBuilder($this->client, $this->requestUrl . '/authorityTemplate');
    }
    /**
     * Navigate to categoryTemplate
     *
     * @return CategoryTemplateRequestBuilder
     */
    public function categoryTemplate(): CategoryTemplateRequestBuilder
    {
        return new CategoryTemplateRequestBuilder($this->client, $this->requestUrl . '/categoryTemplate');
    }
    /**
     * Navigate to citationTemplate
     *
     * @return CitationTemplateRequestBuilder
     */
    public function citationTemplate(): CitationTemplateRequestBuilder
    {
        return new CitationTemplateRequestBuilder($this->client, $this->requestUrl . '/citationTemplate');
    }
    /**
     * Navigate to departmentTemplate
     *
     * @return DepartmentTemplateRequestBuilder
     */
    public function departmentTemplate(): DepartmentTemplateRequestBuilder
    {
        return new DepartmentTemplateRequestBuilder($this->client, $this->requestUrl . '/departmentTemplate');
    }
    /**
     * Navigate to filePlanReferenceTemplate
     *
     * @return FilePlanReferenceTemplateRequestBuilder
     */
    public function filePlanReferenceTemplate(): FilePlanReferenceTemplateRequestBuilder
    {
        return new FilePlanReferenceTemplateRequestBuilder($this->client, $this->requestUrl . '/filePlanReferenceTemplate');
    }
}

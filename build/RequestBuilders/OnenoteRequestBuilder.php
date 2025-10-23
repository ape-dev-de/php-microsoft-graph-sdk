<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Onenote;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\NotebooksRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OperationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ResourcesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SectionGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SectionsRequestBuilder;

/**
 * Request builder for onenote
 */
class OnenoteRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get onenote from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Onenote
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Onenote
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
     * Deserialize response to Onenote
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
        return new Onenote($data);
    }
    /**
     * Update the navigation property onenote in groups
     * @param Onenote $body Request body
     * @return Onenote
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Onenote $body): Onenote
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Onenote
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
        return new Onenote($data);
    }
    /**
     * Delete navigation property onenote for groups
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
     * Navigate to notebooks
     *
     * @return NotebooksRequestBuilder
     */
    public function notebooks(): NotebooksRequestBuilder
    {
        return new NotebooksRequestBuilder($this->client, $this->requestUrl . '/notebooks');
    }
    /**
     * Navigate to operations
     *
     * @return OperationsRequestBuilder
     */
    public function operations(): OperationsRequestBuilder
    {
        return new OperationsRequestBuilder($this->client, $this->requestUrl . '/operations');
    }
    /**
     * Navigate to pages
     *
     * @return PagesRequestBuilder
     */
    public function pages(): PagesRequestBuilder
    {
        return new PagesRequestBuilder($this->client, $this->requestUrl . '/pages');
    }
    /**
     * Navigate to resources
     *
     * @return ResourcesRequestBuilder
     */
    public function resources(): ResourcesRequestBuilder
    {
        return new ResourcesRequestBuilder($this->client, $this->requestUrl . '/resources');
    }
    /**
     * Navigate to sectionGroups
     *
     * @return SectionGroupsRequestBuilder
     */
    public function sectionGroups(): SectionGroupsRequestBuilder
    {
        return new SectionGroupsRequestBuilder($this->client, $this->requestUrl . '/sectionGroups');
    }
    /**
     * Navigate to sections
     *
     * @return SectionsRequestBuilder
     */
    public function sections(): SectionsRequestBuilder
    {
        return new SectionsRequestBuilder($this->client, $this->requestUrl . '/sections');
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Onenote\Notebooks;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Notebook;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Onenote\Notebooks\CopyNotebookRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Onenote\Notebooks\SectionGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Onenote\Notebooks\SectionsRequestBuilder;

/**
 * Request builder for /sites/{site-id}/onenote/notebooks/{notebook-id}
 */
class NotebookRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get notebooks from sites
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Notebook
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Notebook
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
     * Deserialize response to Notebook
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
        return new Notebook($data);
    }
    /**
     * Update the navigation property notebooks in sites
     * @param Notebook $body Request body
     * @return Notebook
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Notebook $body): Notebook
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Notebook
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
        return new Notebook($data);
    }
    /**
     * Delete navigation property notebooks for sites
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
     * Navigate to copyNotebook
     *
     * @return CopyNotebookRequestBuilder
     */
    public function copyNotebook(): CopyNotebookRequestBuilder
    {
        return new CopyNotebookRequestBuilder($this->client, $this->requestUrl . '/copyNotebook');
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

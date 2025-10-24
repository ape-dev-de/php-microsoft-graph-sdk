<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\Onenote\SectionGroups\Sections;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenoteSection;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\Onenote\SectionGroups\Sections\CopyToNotebookRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\Onenote\SectionGroups\Sections\CopyToSectionGroupRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\Onenote\SectionGroups\Sections\PagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\Onenote\SectionGroups\Sections\ParentNotebookRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\Onenote\SectionGroups\Sections\ParentSectionGroupRequestBuilder;

/**
 * Request builder for /me/onenote/sectionGroups/{sectionGroup-id}/sections/{onenoteSection-id}
 */
class OnenoteSectionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get sections from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return OnenoteSection
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): OnenoteSection
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
     * Deserialize response to OnenoteSection
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
        return new OnenoteSection($data);
    }
    /**
     * Update the navigation property sections in me
     * @param OnenoteSection $body Request body
     * @return OnenoteSection
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(OnenoteSection $body): OnenoteSection
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to OnenoteSection
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
        return new OnenoteSection($data);
    }
    /**
     * Delete navigation property sections for me
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
     * Navigate to copyToNotebook
     *
     * @return CopyToNotebookRequestBuilder
     */
    public function copyToNotebook(): CopyToNotebookRequestBuilder
    {
        return new CopyToNotebookRequestBuilder($this->client, $this->requestUrl . '/copyToNotebook');
    }
    /**
     * Navigate to copyToSectionGroup
     *
     * @return CopyToSectionGroupRequestBuilder
     */
    public function copyToSectionGroup(): CopyToSectionGroupRequestBuilder
    {
        return new CopyToSectionGroupRequestBuilder($this->client, $this->requestUrl . '/copyToSectionGroup');
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
     * Navigate to parentNotebook
     *
     * @return ParentNotebookRequestBuilder
     */
    public function parentNotebook(): ParentNotebookRequestBuilder
    {
        return new ParentNotebookRequestBuilder($this->client, $this->requestUrl . '/parentNotebook');
    }
    /**
     * Navigate to parentSectionGroup
     *
     * @return ParentSectionGroupRequestBuilder
     */
    public function parentSectionGroup(): ParentSectionGroupRequestBuilder
    {
        return new ParentSectionGroupRequestBuilder($this->client, $this->requestUrl . '/parentSectionGroup');
    }
}

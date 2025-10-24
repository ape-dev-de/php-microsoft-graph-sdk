<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Groups\Onenote\SectionGroups;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SectionGroup;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Groups\Onenote\SectionGroups\ParentNotebookRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Groups\Onenote\SectionGroups\ParentSectionGroupRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Groups\Onenote\SectionGroups\SectionGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Groups\Onenote\SectionGroups\SectionsRequestBuilder;

/**
 * Request builder for /groups/{group-id}/onenote/sectionGroups/{sectionGroup-id}
 */
class SectionGroupRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get sectionGroups from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SectionGroup
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SectionGroup
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
     * Deserialize response to SectionGroup
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
        return new SectionGroup($data);
    }
    /**
     * Update the navigation property sectionGroups in groups
     * @param SectionGroup $body Request body
     * @return SectionGroup
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SectionGroup $body): SectionGroup
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SectionGroup
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
        return new SectionGroup($data);
    }
    /**
     * Delete navigation property sectionGroups for groups
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

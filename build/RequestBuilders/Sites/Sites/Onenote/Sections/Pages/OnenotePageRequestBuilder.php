<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites\Onenote\Sections\Pages;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenotePage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites\Onenote\Sections\Pages\ContentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites\Onenote\Sections\Pages\CopyToSectionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites\Onenote\Sections\Pages\OnenotePatchContentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites\Onenote\Sections\Pages\PreviewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites\Onenote\Sections\Pages\ParentNotebookRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites\Onenote\Sections\Pages\ParentSectionRequestBuilder;

/**
 * Request builder for /sites/{site-id}/onenote/sections/{onenoteSection-id}/pages/{onenotePage-id}
 */
class OnenotePageRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get pages from sites
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return OnenotePage
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): OnenotePage
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
     * Deserialize response to OnenotePage
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
        return new OnenotePage($data);
    }
    /**
     * Update the navigation property pages in sites
     * @param OnenotePage $body Request body
     * @return OnenotePage
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(OnenotePage $body): OnenotePage
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to OnenotePage
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
        return new OnenotePage($data);
    }
    /**
     * Delete navigation property pages for sites
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
     * Navigate to content
     *
     * @return ContentRequestBuilder
     */
    public function content(): ContentRequestBuilder
    {
        return new ContentRequestBuilder($this->client, $this->requestUrl . '/content');
    }
    /**
     * Navigate to copyToSection
     *
     * @return CopyToSectionRequestBuilder
     */
    public function copyToSection(): CopyToSectionRequestBuilder
    {
        return new CopyToSectionRequestBuilder($this->client, $this->requestUrl . '/copyToSection');
    }
    /**
     * Navigate to onenotePatchContent
     *
     * @return OnenotePatchContentRequestBuilder
     */
    public function onenotePatchContent(): OnenotePatchContentRequestBuilder
    {
        return new OnenotePatchContentRequestBuilder($this->client, $this->requestUrl . '/onenotePatchContent');
    }
    /**
     * Navigate to preview()
     *
     * @return PreviewRequestBuilder
     */
    public function preview(): PreviewRequestBuilder
    {
        return new PreviewRequestBuilder($this->client, $this->requestUrl . '/preview()');
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
     * Navigate to parentSection
     *
     * @return ParentSectionRequestBuilder
     */
    public function parentSection(): ParentSectionRequestBuilder
    {
        return new ParentSectionRequestBuilder($this->client, $this->requestUrl . '/parentSection');
    }
}

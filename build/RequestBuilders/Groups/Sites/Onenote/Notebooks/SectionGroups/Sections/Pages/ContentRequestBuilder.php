<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Onenote\Notebooks\SectionGroups\Sections\Pages;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenotePage;

/**
 * Request builder for /groups/{group-id}/sites/{site-id}/onenote/notebooks/{notebook-id}/sectionGroups/{sectionGroup-id}/sections/{onenoteSection-id}/pages/{onenotePage-id}/content
 */
class ContentRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get content for the navigation property pages from groups
     * @return string|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): string|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to string|null
     */
    private function deserializeGet(string $body): string|null    {
        if (empty($body)) {
            return null;
        }

        return $body;
    }
    /**
     * Update content for the navigation property pages in groups
     * @param OnenotePage $body Request body
     * @return OnenotePage|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function put(OnenotePage $body): OnenotePage|null
    {
        $response = $this->client->put($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePut($responseBody);
    }

    /**
     * Deserialize response to OnenotePage|null
     */
    private function deserializePut(string $body): OnenotePage|null    {
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
     * Delete content for the navigation property pages in groups
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
    private function deserializeDelete(string $body): mixed    {
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
}

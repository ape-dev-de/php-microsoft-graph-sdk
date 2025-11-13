<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\List\Items\DocumentSetVersions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DocumentSetVersion;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\List\Items\DocumentSetVersions\FieldsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\List\Items\DocumentSetVersions\RestoreRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/list/items/{listItem-id}/documentSetVersions/{documentSetVersion-id}
 */
class DocumentSetVersionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get documentSetVersions from drives
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return DocumentSetVersion|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): DocumentSetVersion|null
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
     * Deserialize response to DocumentSetVersion|null
     */
    private function deserializeGet(string $body): DocumentSetVersion|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DocumentSetVersion($data);
    }
    /**
     * Update the navigation property documentSetVersions in drives
     * @param DocumentSetVersion $body Request body
     * @return DocumentSetVersion|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(DocumentSetVersion $body): DocumentSetVersion|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to DocumentSetVersion|null
     */
    private function deserializePatch(string $body): DocumentSetVersion|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DocumentSetVersion($data);
    }
    /**
     * Delete navigation property documentSetVersions for drives
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
    /**
     * Navigate to fields
     *
     * @return FieldsRequestBuilder
     */
    public function fields(): FieldsRequestBuilder
    {
        return new FieldsRequestBuilder($this->client, $this->requestUrl . '/fields');
    }
    /**
     * Navigate to restore
     *
     * @return RestoreRequestBuilder
     */
    public function restore(): RestoreRequestBuilder
    {
        return new RestoreRequestBuilder($this->client, $this->requestUrl . '/restore');
    }
}

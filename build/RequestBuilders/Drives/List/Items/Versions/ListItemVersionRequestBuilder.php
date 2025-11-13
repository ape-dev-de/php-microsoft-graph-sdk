<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\List\Items\Versions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ListItemVersion;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\List\Items\Versions\FieldsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\List\Items\Versions\RestoreVersionRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/list/items/{listItem-id}/versions/{listItemVersion-id}
 */
class ListItemVersionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get versions from drives
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ListItemVersion|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ListItemVersion|null
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
     * Deserialize response to ListItemVersion|null
     */
    private function deserializeGet(string $body): ListItemVersion|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ListItemVersion($data);
    }
    /**
     * Update the navigation property versions in drives
     * @param ListItemVersion $body Request body
     * @return ListItemVersion|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ListItemVersion $body): ListItemVersion|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ListItemVersion|null
     */
    private function deserializePatch(string $body): ListItemVersion|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ListItemVersion($data);
    }
    /**
     * Delete navigation property versions for drives
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
     * Navigate to restoreVersion
     *
     * @return RestoreVersionRequestBuilder
     */
    public function restoreVersion(): RestoreVersionRequestBuilder
    {
        return new RestoreVersionRequestBuilder($this->client, $this->requestUrl . '/restoreVersion');
    }
}

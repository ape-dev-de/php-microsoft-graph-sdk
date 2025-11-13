<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Lists\Items;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ListItem;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Lists\Items\AnalyticsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Lists\Items\CreatedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Lists\Items\DocumentSetVersionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Lists\Items\DriveItemRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Lists\Items\FieldsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Lists\Items\LastModifiedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Lists\Items\CreateLinkRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Lists\Items\GetActivitiesByIntervalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Lists\Items\VersionsRequestBuilder;

/**
 * Request builder for /groups/{group-id}/sites/{site-id}/lists/{list-id}/items/{listItem-id}
 */
class ListItemRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get items from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ListItem|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ListItem|null
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
     * Deserialize response to ListItem|null
     */
    private function deserializeGet(string $body): ListItem|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ListItem($data);
    }
    /**
     * Update the navigation property items in groups
     * @param ListItem $body Request body
     * @return ListItem|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ListItem $body): ListItem|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ListItem|null
     */
    private function deserializePatch(string $body): ListItem|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ListItem($data);
    }
    /**
     * Delete navigation property items for groups
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
     * Navigate to analytics
     *
     * @return AnalyticsRequestBuilder
     */
    public function analytics(): AnalyticsRequestBuilder
    {
        return new AnalyticsRequestBuilder($this->client, $this->requestUrl . '/analytics');
    }
    /**
     * Navigate to createdByUser
     *
     * @return CreatedByUserRequestBuilder
     */
    public function createdByUser(): CreatedByUserRequestBuilder
    {
        return new CreatedByUserRequestBuilder($this->client, $this->requestUrl . '/createdByUser');
    }
    /**
     * Navigate to documentSetVersions
     *
     * @return DocumentSetVersionsRequestBuilder
     */
    public function documentSetVersions(): DocumentSetVersionsRequestBuilder
    {
        return new DocumentSetVersionsRequestBuilder($this->client, $this->requestUrl . '/documentSetVersions');
    }
    /**
     * Navigate to driveItem
     *
     * @return DriveItemRequestBuilder
     */
    public function driveItem(): DriveItemRequestBuilder
    {
        return new DriveItemRequestBuilder($this->client, $this->requestUrl . '/driveItem');
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
     * Navigate to lastModifiedByUser
     *
     * @return LastModifiedByUserRequestBuilder
     */
    public function lastModifiedByUser(): LastModifiedByUserRequestBuilder
    {
        return new LastModifiedByUserRequestBuilder($this->client, $this->requestUrl . '/lastModifiedByUser');
    }
    /**
     * Navigate to createLink
     *
     * @return CreateLinkRequestBuilder
     */
    public function createLink(): CreateLinkRequestBuilder
    {
        return new CreateLinkRequestBuilder($this->client, $this->requestUrl . '/createLink');
    }
    /**
     * Navigate to getActivitiesByInterval()
     *
     * @return GetActivitiesByIntervalRequestBuilder
     */
    public function getActivitiesByInterval(): GetActivitiesByIntervalRequestBuilder
    {
        return new GetActivitiesByIntervalRequestBuilder($this->client, $this->requestUrl . '/getActivitiesByInterval()');
    }
    /**
     * Navigate to versions
     *
     * @return VersionsRequestBuilder
     */
    public function versions(): VersionsRequestBuilder
    {
        return new VersionsRequestBuilder($this->client, $this->requestUrl . '/versions');
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\ContentTypes;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ContentType;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\ContentTypes\BaseTypesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\ContentTypes\ColumnLinksRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\ContentTypes\ColumnPositionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\ContentTypes\ColumnsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\ContentTypes\AssociateWithHubSitesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\ContentTypes\CopyToDefaultContentLocationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\ContentTypes\IsPublishedRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\ContentTypes\PublishRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\ContentTypes\UnpublishRequestBuilder;

/**
 * Request builder for /sites/{site-id}/lists/{list-id}/contentTypes/{contentType-id}
 */
class ContentTypeRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get contentTypes from sites
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ContentType
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ContentType
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
     * Deserialize response to ContentType
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
        return new ContentType($data);
    }
    /**
     * Update the navigation property contentTypes in sites
     * @param ContentType $body Request body
     * @return ContentType
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ContentType $body): ContentType
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ContentType
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
        return new ContentType($data);
    }
    /**
     * Delete navigation property contentTypes for sites
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
     * Navigate to base
     *
     * @return BaseRequestBuilder
     */
    public function base(): BaseRequestBuilder
    {
        return new BaseRequestBuilder($this->client, $this->requestUrl . '/base');
    }
    /**
     * Navigate to baseTypes
     *
     * @return BaseTypesRequestBuilder
     */
    public function baseTypes(): BaseTypesRequestBuilder
    {
        return new BaseTypesRequestBuilder($this->client, $this->requestUrl . '/baseTypes');
    }
    /**
     * Navigate to columnLinks
     *
     * @return ColumnLinksRequestBuilder
     */
    public function columnLinks(): ColumnLinksRequestBuilder
    {
        return new ColumnLinksRequestBuilder($this->client, $this->requestUrl . '/columnLinks');
    }
    /**
     * Navigate to columnPositions
     *
     * @return ColumnPositionsRequestBuilder
     */
    public function columnPositions(): ColumnPositionsRequestBuilder
    {
        return new ColumnPositionsRequestBuilder($this->client, $this->requestUrl . '/columnPositions');
    }
    /**
     * Navigate to columns
     *
     * @return ColumnsRequestBuilder
     */
    public function columns(): ColumnsRequestBuilder
    {
        return new ColumnsRequestBuilder($this->client, $this->requestUrl . '/columns');
    }
    /**
     * Navigate to associateWithHubSites
     *
     * @return AssociateWithHubSitesRequestBuilder
     */
    public function associateWithHubSites(): AssociateWithHubSitesRequestBuilder
    {
        return new AssociateWithHubSitesRequestBuilder($this->client, $this->requestUrl . '/associateWithHubSites');
    }
    /**
     * Navigate to copyToDefaultContentLocation
     *
     * @return CopyToDefaultContentLocationRequestBuilder
     */
    public function copyToDefaultContentLocation(): CopyToDefaultContentLocationRequestBuilder
    {
        return new CopyToDefaultContentLocationRequestBuilder($this->client, $this->requestUrl . '/copyToDefaultContentLocation');
    }
    /**
     * Navigate to isPublished()
     *
     * @return IsPublishedRequestBuilder
     */
    public function isPublished(): IsPublishedRequestBuilder
    {
        return new IsPublishedRequestBuilder($this->client, $this->requestUrl . '/isPublished()');
    }
    /**
     * Navigate to publish
     *
     * @return PublishRequestBuilder
     */
    public function publish(): PublishRequestBuilder
    {
        return new PublishRequestBuilder($this->client, $this->requestUrl . '/publish');
    }
    /**
     * Navigate to unpublish
     *
     * @return UnpublishRequestBuilder
     */
    public function unpublish(): UnpublishRequestBuilder
    {
        return new UnpublishRequestBuilder($this->client, $this->requestUrl . '/unpublish');
    }
}

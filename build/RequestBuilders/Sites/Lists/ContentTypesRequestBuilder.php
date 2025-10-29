<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ContentTypeCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\ContentType;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\ContentTypes\ContentTypeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\ContentTypes\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\ContentTypes\AddCopyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\ContentTypes\AddCopyFromContentTypeHubRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\ContentTypes\GetCompatibleHubContentTypesRequestBuilder;

/**
 * Request builder for /sites/{site-id}/lists/{list-id}/contentTypes
 */
class ContentTypesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List contentTypes in a list
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ContentTypeCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ContentTypeCollectionResponse
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count ? 'true' : 'false';
        }
        if ($orderby !== null && $orderby !== []) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to ContentTypeCollectionResponse
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
        
        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new ContentType($item);
        }
        $collection = new ContentTypeCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to contentTypes for sites
     * @param ContentType $body Request body
     * @return ContentType
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ContentType $body): ContentType
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ContentType
     */
    private function deserializePost(string $body): mixed
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
     * Get request builder for specific item by ID
     *
     * @param string $contentTypeId The item ID
     * @return ContentTypeRequestBuilder
     */
    public function byId(string $contentTypeId): ContentTypeRequestBuilder
    {
        return new ContentTypeRequestBuilder($this->client, $this->requestUrl . '/' . $contentTypeId);
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
    /**
     * Navigate to addCopy
     *
     * @return AddCopyRequestBuilder
     */
    public function addCopy(): AddCopyRequestBuilder
    {
        return new AddCopyRequestBuilder($this->client, $this->requestUrl . '/addCopy');
    }
    /**
     * Navigate to addCopyFromContentTypeHub
     *
     * @return AddCopyFromContentTypeHubRequestBuilder
     */
    public function addCopyFromContentTypeHub(): AddCopyFromContentTypeHubRequestBuilder
    {
        return new AddCopyFromContentTypeHubRequestBuilder($this->client, $this->requestUrl . '/addCopyFromContentTypeHub');
    }
    /**
     * Navigate to getCompatibleHubContentTypes()
     *
     * @return GetCompatibleHubContentTypesRequestBuilder
     */
    public function getCompatibleHubContentTypes(): GetCompatibleHubContentTypesRequestBuilder
    {
        return new GetCompatibleHubContentTypesRequestBuilder($this->client, $this->requestUrl . '/getCompatibleHubContentTypes()');
    }
}

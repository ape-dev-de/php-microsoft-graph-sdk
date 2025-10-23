<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DriveRestoreArtifactsBulkAdditionRequestCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\DriveRestoreArtifactsBulkAdditionRequest;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DriveRestoreArtifactsBulkAdditionRequestRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CountRequestBuilder;

/**
 * Request builder for driveRestoreArtifactsBulkAdditionRequests
 */
class DriveRestoreArtifactsBulkAdditionRequestsRequestBuilder extends BaseRequestBuilder
{
    /**
     * List driveRestoreArtifactsBulkAdditionRequests
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return DriveRestoreArtifactsBulkAdditionRequestCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): DriveRestoreArtifactsBulkAdditionRequestCollectionResponse
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null && $top !== '') {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null && $skip !== '') {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null && $count !== '') {
            $queryParams['$count'] = $count;
        }
        if ($orderby !== null && $orderby !== '') {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to DriveRestoreArtifactsBulkAdditionRequestCollectionResponse
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
            $items[] = new DriveRestoreArtifactsBulkAdditionRequest($item);
        }
        $collection = new DriveRestoreArtifactsBulkAdditionRequestCollectionResponse([]);
        $collection->value = $items;
        $collection->odataContext = $data['@odata.context'] ?? null;
        $collection->odataNextLink = $data['@odata.nextLink'] ?? null;
        $collection->odataCount = $data['@odata.count'] ?? null;
        return $collection;
    }
    /**
     * Create driveRestoreArtifactsBulkAdditionRequest
     * @param DriveRestoreArtifactsBulkAdditionRequest $body Request body
     * @return DriveRestoreArtifactsBulkAdditionRequest
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(DriveRestoreArtifactsBulkAdditionRequest $body): DriveRestoreArtifactsBulkAdditionRequest
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to DriveRestoreArtifactsBulkAdditionRequest
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
        return new DriveRestoreArtifactsBulkAdditionRequest($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $driveRestoreArtifactsBulkAdditionRequestId The item ID
     * @return DriveRestoreArtifactsBulkAdditionRequestRequestBuilder
     */
    public function byId(string $driveRestoreArtifactsBulkAdditionRequestId): DriveRestoreArtifactsBulkAdditionRequestRequestBuilder
    {
        return new DriveRestoreArtifactsBulkAdditionRequestRequestBuilder($this->client, $this->requestUrl . '/' . $driveRestoreArtifactsBulkAdditionRequestId);
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
}

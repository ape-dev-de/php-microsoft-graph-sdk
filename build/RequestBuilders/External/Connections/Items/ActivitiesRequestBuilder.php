<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\External\Connections\Items;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsExternalActivityCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsExternalActivity;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\External\Connections\Items\Activities\ExternalActivityRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\External\Connections\Items\Activities\CountRequestBuilder;

/**
 * Request builder for /external/connections/{externalConnection-id}/items/{externalItem-id}/activities
 */
class ActivitiesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get activities from external
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ExternalConnectorsExternalActivityCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ExternalConnectorsExternalActivityCollectionResponse|null
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
     * Deserialize response to ExternalConnectorsExternalActivityCollectionResponse|null
     */
    private function deserializeGet(string $body): ExternalConnectorsExternalActivityCollectionResponse|null    {
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
            $items[] = new ExternalConnectorsExternalActivity($item);
        }
        $collection = new ExternalConnectorsExternalActivityCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to activities for external
     * @param ExternalConnectorsExternalActivity $body Request body
     * @return ExternalConnectorsExternalActivity|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ExternalConnectorsExternalActivity $body): ExternalConnectorsExternalActivity|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ExternalConnectorsExternalActivity|null
     */
    private function deserializePost(string $body): ExternalConnectorsExternalActivity|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ExternalConnectorsExternalActivity($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $externalActivityId The item ID
     * @return ExternalActivityRequestBuilder
     */
    public function byId(string $externalActivityId): ExternalActivityRequestBuilder
    {
        return new ExternalActivityRequestBuilder($this->client, $this->requestUrl . '/' . $externalActivityId);
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

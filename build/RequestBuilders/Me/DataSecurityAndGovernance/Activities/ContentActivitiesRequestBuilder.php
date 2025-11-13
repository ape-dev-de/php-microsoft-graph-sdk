<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\DataSecurityAndGovernance\Activities;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ContentActivityCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\ContentActivity;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\DataSecurityAndGovernance\Activities\ContentActivities\ContentActivityRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\DataSecurityAndGovernance\Activities\ContentActivities\CountRequestBuilder;

/**
 * Request builder for /me/dataSecurityAndGovernance/activities/contentActivities
 */
class ContentActivitiesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get contentActivities from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ContentActivityCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ContentActivityCollectionResponse|null
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
     * Deserialize response to ContentActivityCollectionResponse|null
     */
    private function deserializeGet(string $body): ContentActivityCollectionResponse|null    {
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
            $items[] = new ContentActivity($item);
        }
        $collection = new ContentActivityCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create contentActivity
     * @param ContentActivity $body Request body
     * @return ContentActivity|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ContentActivity $body): ContentActivity|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ContentActivity|null
     */
    private function deserializePost(string $body): ContentActivity|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ContentActivity($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $contentActivityId The item ID
     * @return ContentActivityRequestBuilder
     */
    public function byId(string $contentActivityId): ContentActivityRequestBuilder
    {
        return new ContentActivityRequestBuilder($this->client, $this->requestUrl . '/' . $contentActivityId);
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

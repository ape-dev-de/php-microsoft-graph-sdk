<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Pages\GraphsitePage\CanvasLayout;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\HorizontalSectionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\HorizontalSection;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Pages\GraphsitePage\CanvasLayout\HorizontalSections\HorizontalSectionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Sites\Pages\GraphsitePage\CanvasLayout\HorizontalSections\CountRequestBuilder;

/**
 * Request builder for /groups/{group-id}/sites/{site-id}/pages/{baseSitePage-id}/graph.sitePage/canvasLayout/horizontalSections
 */
class HorizontalSectionsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get horizontalSections from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return HorizontalSectionCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): HorizontalSectionCollectionResponse|null
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
     * Deserialize response to HorizontalSectionCollectionResponse|null
     */
    private function deserializeGet(string $body): HorizontalSectionCollectionResponse|null    {
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
            $items[] = new HorizontalSection($item);
        }
        $collection = new HorizontalSectionCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to horizontalSections for groups
     * @param HorizontalSection $body Request body
     * @return HorizontalSection|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(HorizontalSection $body): HorizontalSection|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to HorizontalSection|null
     */
    private function deserializePost(string $body): HorizontalSection|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new HorizontalSection($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $horizontalSectionId The item ID
     * @return HorizontalSectionRequestBuilder
     */
    public function byId(string $horizontalSectionId): HorizontalSectionRequestBuilder
    {
        return new HorizontalSectionRequestBuilder($this->client, $this->requestUrl . '/' . $horizontalSectionId);
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

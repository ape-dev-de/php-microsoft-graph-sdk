<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\JoinedTeams\Schedule;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OfferShiftRequestCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\OfferShiftRequest;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\JoinedTeams\Schedule\OfferShiftRequests\OfferShiftRequestRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\JoinedTeams\Schedule\OfferShiftRequests\CountRequestBuilder;

/**
 * Request builder for /me/joinedTeams/{team-id}/schedule/offerShiftRequests
 */
class OfferShiftRequestsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get offerShiftRequests from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return OfferShiftRequestCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): OfferShiftRequestCollectionResponse|null
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
     * Deserialize response to OfferShiftRequestCollectionResponse|null
     */
    private function deserializeGet(string $body): OfferShiftRequestCollectionResponse|null    {
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
            $items[] = new OfferShiftRequest($item);
        }
        $collection = new OfferShiftRequestCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to offerShiftRequests for me
     * @param OfferShiftRequest $body Request body
     * @return OfferShiftRequest|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(OfferShiftRequest $body): OfferShiftRequest|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to OfferShiftRequest|null
     */
    private function deserializePost(string $body): OfferShiftRequest|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new OfferShiftRequest($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $offerShiftRequestId The item ID
     * @return OfferShiftRequestRequestBuilder
     */
    public function byId(string $offerShiftRequestId): OfferShiftRequestRequestBuilder
    {
        return new OfferShiftRequestRequestBuilder($this->client, $this->requestUrl . '/' . $offerShiftRequestId);
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

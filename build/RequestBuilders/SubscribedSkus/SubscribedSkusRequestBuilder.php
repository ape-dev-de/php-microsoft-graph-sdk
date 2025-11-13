<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SubscribedSkus;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SubscribedSkuCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\SubscribedSku;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SubscribedSkus\SubscribedSkuRequestBuilder;

/**
 * Request builder for /subscribedSkus
 */
class SubscribedSkusRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List subscribedSkus
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return SubscribedSkuCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): SubscribedSkuCollectionResponse|null
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
     * Deserialize response to SubscribedSkuCollectionResponse|null
     */
    private function deserializeGet(string $body): SubscribedSkuCollectionResponse|null    {
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
            $items[] = new SubscribedSku($item);
        }
        $collection = new SubscribedSkuCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Add new entity to subscribedSkus
     * @param SubscribedSku $body Request body
     * @return SubscribedSku|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SubscribedSku $body): SubscribedSku|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SubscribedSku|null
     */
    private function deserializePost(string $body): SubscribedSku|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SubscribedSku($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $subscribedSkuId The item ID
     * @return SubscribedSkuRequestBuilder
     */
    public function byId(string $subscribedSkuId): SubscribedSkuRequestBuilder
    {
        return new SubscribedSkuRequestBuilder($this->client, $this->requestUrl . '/' . $subscribedSkuId);
    }
}

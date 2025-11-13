<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Printers;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PrintTaskTriggerCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\PrintTaskTrigger;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Printers\TaskTriggers\PrintTaskTriggerRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Printers\TaskTriggers\CountRequestBuilder;

/**
 * Request builder for /print/printers/{printer-id}/taskTriggers
 */
class TaskTriggersRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List taskTriggers
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return PrintTaskTriggerCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): PrintTaskTriggerCollectionResponse|null
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
     * Deserialize response to PrintTaskTriggerCollectionResponse|null
     */
    private function deserializeGet(string $body): PrintTaskTriggerCollectionResponse|null    {
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
            $items[] = new PrintTaskTrigger($item);
        }
        $collection = new PrintTaskTriggerCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create printTaskTrigger
     * @param PrintTaskTrigger $body Request body
     * @return PrintTaskTrigger|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(PrintTaskTrigger $body): PrintTaskTrigger|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to PrintTaskTrigger|null
     */
    private function deserializePost(string $body): PrintTaskTrigger|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PrintTaskTrigger($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $printTaskTriggerId The item ID
     * @return PrintTaskTriggerRequestBuilder
     */
    public function byId(string $printTaskTriggerId): PrintTaskTriggerRequestBuilder
    {
        return new PrintTaskTriggerRequestBuilder($this->client, $this->requestUrl . '/' . $printTaskTriggerId);
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

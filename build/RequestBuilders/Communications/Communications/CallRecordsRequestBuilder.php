<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Communications;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CallRecordsCallRecordCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\CallRecordsCallRecord;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Communications\CallRecords\CallRecordRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Communications\CallRecords\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Communications\CallRecords\MicrosoftgraphcallRecordsgetDirectRoutingCallsfromDateTimefromDateTimetoDateTimetoDateTimeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Communications\CallRecords\MicrosoftgraphcallRecordsgetPstnCallsfromDateTimefromDateTimetoDateTimetoDateTimeRequestBuilder;

/**
 * Request builder for /communications/callRecords
 */
class CallRecordsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List callRecords
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return CallRecordsCallRecordCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): CallRecordsCallRecordCollectionResponse
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
     * Deserialize response to CallRecordsCallRecordCollectionResponse
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
            $items[] = new CallRecordsCallRecord($item);
        }
        $collection = new CallRecordsCallRecordCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to callRecords for communications
     * @param CallRecordsCallRecord $body Request body
     * @return CallRecordsCallRecord
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(CallRecordsCallRecord $body): CallRecordsCallRecord
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to CallRecordsCallRecord
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
        return new CallRecordsCallRecord($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $callRecordId The item ID
     * @return CallRecordRequestBuilder
     */
    public function byId(string $callRecordId): CallRecordRequestBuilder
    {
        return new CallRecordRequestBuilder($this->client, $this->requestUrl . '/' . $callRecordId);
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

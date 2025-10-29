<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TelecomExpenseManagementPartnerCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\TelecomExpenseManagementPartner;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\TelecomExpenseManagementPartners\TelecomExpenseManagementPartnerRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\TelecomExpenseManagementPartners\CountRequestBuilder;

/**
 * Request builder for /deviceManagement/telecomExpenseManagementPartners
 */
class TelecomExpenseManagementPartnersRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List telecomExpenseManagementPartners
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return TelecomExpenseManagementPartnerCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): TelecomExpenseManagementPartnerCollectionResponse
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
     * Deserialize response to TelecomExpenseManagementPartnerCollectionResponse
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
            $items[] = new TelecomExpenseManagementPartner($item);
        }
        $collection = new TelecomExpenseManagementPartnerCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create telecomExpenseManagementPartner
     * @param TelecomExpenseManagementPartner $body Request body
     * @return TelecomExpenseManagementPartner
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(TelecomExpenseManagementPartner $body): TelecomExpenseManagementPartner
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to TelecomExpenseManagementPartner
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
        return new TelecomExpenseManagementPartner($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $telecomExpenseManagementPartnerId The item ID
     * @return TelecomExpenseManagementPartnerRequestBuilder
     */
    public function byId(string $telecomExpenseManagementPartnerId): TelecomExpenseManagementPartnerRequestBuilder
    {
        return new TelecomExpenseManagementPartnerRequestBuilder($this->client, $this->requestUrl . '/' . $telecomExpenseManagementPartnerId);
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

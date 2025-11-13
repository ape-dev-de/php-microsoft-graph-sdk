<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WindowsInformationProtectionNetworkLearningSummaryCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\WindowsInformationProtectionNetworkLearningSummary;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\WindowsInformationProtectionNetworkLearningSummaries\WindowsInformationProtectionNetworkLearningSummaryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\WindowsInformationProtectionNetworkLearningSummaries\CountRequestBuilder;

/**
 * Request builder for /deviceManagement/windowsInformationProtectionNetworkLearningSummaries
 */
class WindowsInformationProtectionNetworkLearningSummariesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List windowsInformationProtectionNetworkLearningSummaries
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return WindowsInformationProtectionNetworkLearningSummaryCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): WindowsInformationProtectionNetworkLearningSummaryCollectionResponse|null
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
     * Deserialize response to WindowsInformationProtectionNetworkLearningSummaryCollectionResponse|null
     */
    private function deserializeGet(string $body): WindowsInformationProtectionNetworkLearningSummaryCollectionResponse|null    {
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
            $items[] = new WindowsInformationProtectionNetworkLearningSummary($item);
        }
        $collection = new WindowsInformationProtectionNetworkLearningSummaryCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create windowsInformationProtectionNetworkLearningSummary
     * @param WindowsInformationProtectionNetworkLearningSummary $body Request body
     * @return WindowsInformationProtectionNetworkLearningSummary|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(WindowsInformationProtectionNetworkLearningSummary $body): WindowsInformationProtectionNetworkLearningSummary|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to WindowsInformationProtectionNetworkLearningSummary|null
     */
    private function deserializePost(string $body): WindowsInformationProtectionNetworkLearningSummary|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WindowsInformationProtectionNetworkLearningSummary($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $windowsInformationProtectionNetworkLearningSummaryId The item ID
     * @return WindowsInformationProtectionNetworkLearningSummaryRequestBuilder
     */
    public function byId(string $windowsInformationProtectionNetworkLearningSummaryId): WindowsInformationProtectionNetworkLearningSummaryRequestBuilder
    {
        return new WindowsInformationProtectionNetworkLearningSummaryRequestBuilder($this->client, $this->requestUrl . '/' . $windowsInformationProtectionNetworkLearningSummaryId);
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

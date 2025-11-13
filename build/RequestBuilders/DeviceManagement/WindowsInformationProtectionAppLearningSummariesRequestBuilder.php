<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WindowsInformationProtectionAppLearningSummaryCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\WindowsInformationProtectionAppLearningSummary;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\WindowsInformationProtectionAppLearningSummaries\WindowsInformationProtectionAppLearningSummaryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\WindowsInformationProtectionAppLearningSummaries\CountRequestBuilder;

/**
 * Request builder for /deviceManagement/windowsInformationProtectionAppLearningSummaries
 */
class WindowsInformationProtectionAppLearningSummariesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List windowsInformationProtectionAppLearningSummaries
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return WindowsInformationProtectionAppLearningSummaryCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): WindowsInformationProtectionAppLearningSummaryCollectionResponse|null
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
     * Deserialize response to WindowsInformationProtectionAppLearningSummaryCollectionResponse|null
     */
    private function deserializeGet(string $body): WindowsInformationProtectionAppLearningSummaryCollectionResponse|null    {
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
            $items[] = new WindowsInformationProtectionAppLearningSummary($item);
        }
        $collection = new WindowsInformationProtectionAppLearningSummaryCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create windowsInformationProtectionAppLearningSummary
     * @param WindowsInformationProtectionAppLearningSummary $body Request body
     * @return WindowsInformationProtectionAppLearningSummary|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(WindowsInformationProtectionAppLearningSummary $body): WindowsInformationProtectionAppLearningSummary|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to WindowsInformationProtectionAppLearningSummary|null
     */
    private function deserializePost(string $body): WindowsInformationProtectionAppLearningSummary|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WindowsInformationProtectionAppLearningSummary($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $windowsInformationProtectionAppLearningSummaryId The item ID
     * @return WindowsInformationProtectionAppLearningSummaryRequestBuilder
     */
    public function byId(string $windowsInformationProtectionAppLearningSummaryId): WindowsInformationProtectionAppLearningSummaryRequestBuilder
    {
        return new WindowsInformationProtectionAppLearningSummaryRequestBuilder($this->client, $this->requestUrl . '/' . $windowsInformationProtectionAppLearningSummaryId);
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

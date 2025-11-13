<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceCompliancePolicySettingStateSummaryCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceCompliancePolicySettingStateSummary;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicySettingStateSummaries\DeviceCompliancePolicySettingStateSummaryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicySettingStateSummaries\CountRequestBuilder;

/**
 * Request builder for /deviceManagement/deviceCompliancePolicySettingStateSummaries
 */
class DeviceCompliancePolicySettingStateSummariesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List deviceCompliancePolicySettingStateSummaries
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return DeviceCompliancePolicySettingStateSummaryCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): DeviceCompliancePolicySettingStateSummaryCollectionResponse|null
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
     * Deserialize response to DeviceCompliancePolicySettingStateSummaryCollectionResponse|null
     */
    private function deserializeGet(string $body): DeviceCompliancePolicySettingStateSummaryCollectionResponse|null    {
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
            $items[] = new DeviceCompliancePolicySettingStateSummary($item);
        }
        $collection = new DeviceCompliancePolicySettingStateSummaryCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create deviceCompliancePolicySettingStateSummary
     * @param DeviceCompliancePolicySettingStateSummary $body Request body
     * @return DeviceCompliancePolicySettingStateSummary|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(DeviceCompliancePolicySettingStateSummary $body): DeviceCompliancePolicySettingStateSummary|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to DeviceCompliancePolicySettingStateSummary|null
     */
    private function deserializePost(string $body): DeviceCompliancePolicySettingStateSummary|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DeviceCompliancePolicySettingStateSummary($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $deviceCompliancePolicySettingStateSummaryId The item ID
     * @return DeviceCompliancePolicySettingStateSummaryRequestBuilder
     */
    public function byId(string $deviceCompliancePolicySettingStateSummaryId): DeviceCompliancePolicySettingStateSummaryRequestBuilder
    {
        return new DeviceCompliancePolicySettingStateSummaryRequestBuilder($this->client, $this->requestUrl . '/' . $deviceCompliancePolicySettingStateSummaryId);
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

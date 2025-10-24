<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\Solutions\BackupRestore;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DriveProtectionUnitsBulkAdditionJobCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\DriveProtectionUnitsBulkAdditionJob;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\Solutions\BackupRestore\DriveProtectionUnitsBulkAdditionJobs\DriveProtectionUnitsBulkAdditionJobRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\Solutions\BackupRestore\DriveProtectionUnitsBulkAdditionJobs\CountRequestBuilder;

/**
 * Request builder for /solutions/backupRestore/driveProtectionUnitsBulkAdditionJobs
 */
class DriveProtectionUnitsBulkAdditionJobsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get driveProtectionUnitsBulkAdditionJobs from solutions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return DriveProtectionUnitsBulkAdditionJobCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): DriveProtectionUnitsBulkAdditionJobCollectionResponse
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
     * Deserialize response to DriveProtectionUnitsBulkAdditionJobCollectionResponse
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
            $items[] = new DriveProtectionUnitsBulkAdditionJob($item);
        }
        $collection = new DriveProtectionUnitsBulkAdditionJobCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to driveProtectionUnitsBulkAdditionJobs for solutions
     * @param DriveProtectionUnitsBulkAdditionJob $body Request body
     * @return DriveProtectionUnitsBulkAdditionJob
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(DriveProtectionUnitsBulkAdditionJob $body): DriveProtectionUnitsBulkAdditionJob
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to DriveProtectionUnitsBulkAdditionJob
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
        return new DriveProtectionUnitsBulkAdditionJob($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $driveProtectionUnitsBulkAdditionJobId The item ID
     * @return DriveProtectionUnitsBulkAdditionJobRequestBuilder
     */
    public function byId(string $driveProtectionUnitsBulkAdditionJobId): DriveProtectionUnitsBulkAdditionJobRequestBuilder
    {
        return new DriveProtectionUnitsBulkAdditionJobRequestBuilder($this->client, $this->requestUrl . '/' . $driveProtectionUnitsBulkAdditionJobId);
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

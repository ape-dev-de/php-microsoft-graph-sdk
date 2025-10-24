<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ProtectionUnitBaseCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\ProtectionUnitBase;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ProtectionUnits\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ProtectionUnits\GraphDriveProtectionUnitRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ProtectionUnits\GraphMailboxProtectionUnitRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ProtectionUnits\GraphSiteProtectionUnitRequestBuilder;

/**
 * Request builder for /solutions/backupRestore/protectionUnits
 */
class ProtectionUnitsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get protectionUnitBase
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ProtectionUnitBaseCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ProtectionUnitBaseCollectionResponse
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
     * Deserialize response to ProtectionUnitBaseCollectionResponse
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
            $items[] = new ProtectionUnitBase($item);
        }
        $collection = new ProtectionUnitBaseCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $protectionUnitBaseId The item ID
     * @return ProtectionUnitBaseRequestBuilder
     */
    public function byId(string $protectionUnitBaseId): ProtectionUnitBaseRequestBuilder
    {
        return new ProtectionUnitBaseRequestBuilder($this->client, $this->requestUrl . '/' . $protectionUnitBaseId);
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
    /**
     * Navigate to graph.driveProtectionUnit
     *
     * @return GraphDriveProtectionUnitRequestBuilder
     */
    public function graphDriveProtectionUnit(): GraphDriveProtectionUnitRequestBuilder
    {
        return new GraphDriveProtectionUnitRequestBuilder($this->client, $this->requestUrl . '/graph.driveProtectionUnit');
    }
    /**
     * Navigate to graph.mailboxProtectionUnit
     *
     * @return GraphMailboxProtectionUnitRequestBuilder
     */
    public function graphMailboxProtectionUnit(): GraphMailboxProtectionUnitRequestBuilder
    {
        return new GraphMailboxProtectionUnitRequestBuilder($this->client, $this->requestUrl . '/graph.mailboxProtectionUnit');
    }
    /**
     * Navigate to graph.siteProtectionUnit
     *
     * @return GraphSiteProtectionUnitRequestBuilder
     */
    public function graphSiteProtectionUnit(): GraphSiteProtectionUnitRequestBuilder
    {
        return new GraphSiteProtectionUnitRequestBuilder($this->client, $this->requestUrl . '/graph.siteProtectionUnit');
    }
}

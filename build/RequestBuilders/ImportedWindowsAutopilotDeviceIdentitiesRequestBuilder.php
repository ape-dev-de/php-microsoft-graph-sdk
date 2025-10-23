<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ImportedWindowsAutopilotDeviceIdentityCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\ImportedWindowsAutopilotDeviceIdentity;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ImportedWindowsAutopilotDeviceIdentityRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ImportRequestBuilder;

/**
 * Request builder for importedWindowsAutopilotDeviceIdentities
 */
class ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder extends BaseRequestBuilder
{
    /**
     * List importedWindowsAutopilotDeviceIdentities
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ImportedWindowsAutopilotDeviceIdentityCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ImportedWindowsAutopilotDeviceIdentityCollectionResponse
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null) {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null) {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count;
        }
        if ($orderby !== null) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to ImportedWindowsAutopilotDeviceIdentityCollectionResponse
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
            $items[] = new ImportedWindowsAutopilotDeviceIdentity($item);
        }
        $collection = new ImportedWindowsAutopilotDeviceIdentityCollectionResponse([]);
        $collection->value = $items;
        $collection->odataContext = $data['@odata.context'] ?? null;
        $collection->odataNextLink = $data['@odata.nextLink'] ?? null;
        $collection->odataCount = $data['@odata.count'] ?? null;
        return $collection;
    }
    /**
     * Create importedWindowsAutopilotDeviceIdentity
     * @param ImportedWindowsAutopilotDeviceIdentity $body Request body
     * @return ImportedWindowsAutopilotDeviceIdentity
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ImportedWindowsAutopilotDeviceIdentity $body): ImportedWindowsAutopilotDeviceIdentity
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ImportedWindowsAutopilotDeviceIdentity
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
        return new ImportedWindowsAutopilotDeviceIdentity($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $importedWindowsAutopilotDeviceIdentityId The item ID
     * @return ImportedWindowsAutopilotDeviceIdentityRequestBuilder
     */
    public function byId(string $importedWindowsAutopilotDeviceIdentityId): ImportedWindowsAutopilotDeviceIdentityRequestBuilder
    {
        return new ImportedWindowsAutopilotDeviceIdentityRequestBuilder($this->client, $this->requestUrl . '/' . $importedWindowsAutopilotDeviceIdentityId);
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
     * Navigate to import
     *
     * @return ImportRequestBuilder
     */
    public function import(): ImportRequestBuilder
    {
        return new ImportRequestBuilder($this->client, $this->requestUrl . '/import');
    }
}

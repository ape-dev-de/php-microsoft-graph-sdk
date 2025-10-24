<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Contacts\Contacts;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryObjectCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryObject;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Contacts\Contacts\MemberOf\DirectoryObjectRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Contacts\Contacts\MemberOf\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Contacts\Contacts\MemberOf\GraphAdministrativeUnitRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Contacts\Contacts\MemberOf\GraphGroupRequestBuilder;

/**
 * Request builder for /contacts/{orgContact-id}/memberOf
 */
class MemberOfRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List memberOf
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param string|null $consistencyLevel Indicates the requested consistency level. Documentation URL: https://docs.microsoft.com/graph/aad-advanced-queries
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return DirectoryObjectCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?string $consistencyLevel = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): DirectoryObjectCollectionResponse
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($consistencyLevel !== null && $consistencyLevel !== '') {
            $queryParams['ConsistencyLevel'] = $consistencyLevel;
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
     * Deserialize response to DirectoryObjectCollectionResponse
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
            $items[] = new DirectoryObject($item);
        }
        $collection = new DirectoryObjectCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $directoryObjectId The item ID
     * @return DirectoryObjectRequestBuilder
     */
    public function byId(string $directoryObjectId): DirectoryObjectRequestBuilder
    {
        return new DirectoryObjectRequestBuilder($this->client, $this->requestUrl . '/' . $directoryObjectId);
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
     * Navigate to graph.administrativeUnit
     *
     * @return GraphAdministrativeUnitRequestBuilder
     */
    public function graphAdministrativeUnit(): GraphAdministrativeUnitRequestBuilder
    {
        return new GraphAdministrativeUnitRequestBuilder($this->client, $this->requestUrl . '/graph.administrativeUnit');
    }
    /**
     * Navigate to graph.group
     *
     * @return GraphGroupRequestBuilder
     */
    public function graphGroup(): GraphGroupRequestBuilder
    {
        return new GraphGroupRequestBuilder($this->client, $this->requestUrl . '/graph.group');
    }
}

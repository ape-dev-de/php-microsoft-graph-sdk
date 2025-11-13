<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\External\Connections\Groups;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsIdentityCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsIdentity;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\External\Connections\Groups\Members\IdentityRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\External\Connections\Groups\Members\CountRequestBuilder;

/**
 * Request builder for /external/connections/{externalConnection-id}/groups/{externalGroup-id}/members
 */
class MembersRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get members from external
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ExternalConnectorsIdentityCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ExternalConnectorsIdentityCollectionResponse|null
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
     * Deserialize response to ExternalConnectorsIdentityCollectionResponse|null
     */
    private function deserializeGet(string $body): ExternalConnectorsIdentityCollectionResponse|null    {
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
            $items[] = new ExternalConnectorsIdentity($item);
        }
        $collection = new ExternalConnectorsIdentityCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create identity
     * @param ExternalConnectorsIdentity $body Request body
     * @return ExternalConnectorsIdentity|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ExternalConnectorsIdentity $body): ExternalConnectorsIdentity|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ExternalConnectorsIdentity|null
     */
    private function deserializePost(string $body): ExternalConnectorsIdentity|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ExternalConnectorsIdentity($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $identityId The item ID
     * @return IdentityRequestBuilder
     */
    public function byId(string $identityId): IdentityRequestBuilder
    {
        return new IdentityRequestBuilder($this->client, $this->requestUrl . '/' . $identityId);
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

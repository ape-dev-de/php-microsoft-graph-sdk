<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryObjectCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryObject;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Owners\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Owners\RefRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Owners\GraphAppRoleAssignmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Owners\GraphEndpointRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Owners\GraphServicePrincipalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Owners\GraphUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Owners\DirectoryObjectRequestBuilder;

/**
 * Request builder for /servicePrincipals/{servicePrincipal-id}/owners
 */
class OwnersRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get owners from servicePrincipals
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
     * @return DirectoryObjectCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?string $consistencyLevel = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): DirectoryObjectCollectionResponse|null
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
     * Deserialize response to DirectoryObjectCollectionResponse|null
     */
    private function deserializeGet(string $body): DirectoryObjectCollectionResponse|null    {
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
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
    /**
     * Navigate to $ref
     *
     * @return RefRequestBuilder
     */
    public function ref(): RefRequestBuilder
    {
        return new RefRequestBuilder($this->client, $this->requestUrl . '/$ref');
    }
    /**
     * Navigate to graph.appRoleAssignment
     *
     * @return GraphAppRoleAssignmentRequestBuilder
     */
    public function graphAppRoleAssignment(): GraphAppRoleAssignmentRequestBuilder
    {
        return new GraphAppRoleAssignmentRequestBuilder($this->client, $this->requestUrl . '/graph.appRoleAssignment');
    }
    /**
     * Navigate to graph.endpoint
     *
     * @return GraphEndpointRequestBuilder
     */
    public function graphEndpoint(): GraphEndpointRequestBuilder
    {
        return new GraphEndpointRequestBuilder($this->client, $this->requestUrl . '/graph.endpoint');
    }
    /**
     * Navigate to graph.servicePrincipal
     *
     * @return GraphServicePrincipalRequestBuilder
     */
    public function graphServicePrincipal(): GraphServicePrincipalRequestBuilder
    {
        return new GraphServicePrincipalRequestBuilder($this->client, $this->requestUrl . '/graph.servicePrincipal');
    }
    /**
     * Navigate to graph.user
     *
     * @return GraphUserRequestBuilder
     */
    public function graphUser(): GraphUserRequestBuilder
    {
        return new GraphUserRequestBuilder($this->client, $this->requestUrl . '/graph.user');
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
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\RiskyServicePrincipalCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\RiskyServicePrincipal;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RiskyServicePrincipalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ConfirmCompromisedRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DismissRequestBuilder;

/**
 * Request builder for riskyServicePrincipals
 */
class RiskyServicePrincipalsRequestBuilder extends BaseRequestBuilder
{
    /**
     * List riskyServicePrincipals
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return RiskyServicePrincipalCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): RiskyServicePrincipalCollectionResponse
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null && $top !== '') {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null && $skip !== '') {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null && $count !== '') {
            $queryParams['$count'] = $count;
        }
        if ($orderby !== null && $orderby !== '') {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to RiskyServicePrincipalCollectionResponse
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
            $items[] = new RiskyServicePrincipal($item);
        }
        $collection = new RiskyServicePrincipalCollectionResponse([]);
        $collection->value = $items;
        $collection->odataContext = $data['@odata.context'] ?? null;
        $collection->odataNextLink = $data['@odata.nextLink'] ?? null;
        $collection->odataCount = $data['@odata.count'] ?? null;
        return $collection;
    }
    /**
     * Create new navigation property to riskyServicePrincipals for identityProtection
     * @param RiskyServicePrincipal $body Request body
     * @return RiskyServicePrincipal
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(RiskyServicePrincipal $body): RiskyServicePrincipal
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to RiskyServicePrincipal
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
        return new RiskyServicePrincipal($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $riskyServicePrincipalId The item ID
     * @return RiskyServicePrincipalRequestBuilder
     */
    public function byId(string $riskyServicePrincipalId): RiskyServicePrincipalRequestBuilder
    {
        return new RiskyServicePrincipalRequestBuilder($this->client, $this->requestUrl . '/' . $riskyServicePrincipalId);
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
     * Navigate to confirmCompromised
     *
     * @return ConfirmCompromisedRequestBuilder
     */
    public function confirmCompromised(): ConfirmCompromisedRequestBuilder
    {
        return new ConfirmCompromisedRequestBuilder($this->client, $this->requestUrl . '/confirmCompromised');
    }
    /**
     * Navigate to dismiss
     *
     * @return DismissRequestBuilder
     */
    public function dismiss(): DismissRequestBuilder
    {
        return new DismissRequestBuilder($this->client, $this->requestUrl . '/dismiss');
    }
}

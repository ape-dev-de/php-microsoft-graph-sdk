<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ServicePrincipalCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\ServicePrincipal;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\ServicePrincipalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\DeltaRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\GetAvailableExtensionPropertiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\GetByIdsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\ValidatePropertiesRequestBuilder;

/**
 * Request builder for /servicePrincipals
 */
class ServicePrincipalsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List servicePrincipals
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
     * @return ServicePrincipalCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?string $consistencyLevel = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ServicePrincipalCollectionResponse|null
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
     * Deserialize response to ServicePrincipalCollectionResponse|null
     */
    private function deserializeGet(string $body): ServicePrincipalCollectionResponse|null    {
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
            $items[] = new ServicePrincipal($item);
        }
        $collection = new ServicePrincipalCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create servicePrincipal
     * @param ServicePrincipal $body Request body
     * @return ServicePrincipal|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ServicePrincipal $body): ServicePrincipal|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ServicePrincipal|null
     */
    private function deserializePost(string $body): ServicePrincipal|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ServicePrincipal($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $servicePrincipalId The item ID
     * @return ServicePrincipalRequestBuilder
     */
    public function byId(string $servicePrincipalId): ServicePrincipalRequestBuilder
    {
        return new ServicePrincipalRequestBuilder($this->client, $this->requestUrl . '/' . $servicePrincipalId);
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
     * Navigate to delta()
     *
     * @return DeltaRequestBuilder
     */
    public function delta(): DeltaRequestBuilder
    {
        return new DeltaRequestBuilder($this->client, $this->requestUrl . '/delta()');
    }
    /**
     * Navigate to getAvailableExtensionProperties
     *
     * @return GetAvailableExtensionPropertiesRequestBuilder
     */
    public function getAvailableExtensionProperties(): GetAvailableExtensionPropertiesRequestBuilder
    {
        return new GetAvailableExtensionPropertiesRequestBuilder($this->client, $this->requestUrl . '/getAvailableExtensionProperties');
    }
    /**
     * Navigate to getByIds
     *
     * @return GetByIdsRequestBuilder
     */
    public function getByIds(): GetByIdsRequestBuilder
    {
        return new GetByIdsRequestBuilder($this->client, $this->requestUrl . '/getByIds');
    }
    /**
     * Navigate to validateProperties
     *
     * @return ValidatePropertiesRequestBuilder
     */
    public function validateProperties(): ValidatePropertiesRequestBuilder
    {
        return new ValidatePropertiesRequestBuilder($this->client, $this->requestUrl . '/validateProperties');
    }
}

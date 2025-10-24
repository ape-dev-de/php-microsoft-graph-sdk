<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityEdiscoveryNoncustodialDataSourceCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityEdiscoveryNoncustodialDataSource;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\NoncustodialDataSources\EdiscoveryNoncustodialDataSourceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\NoncustodialDataSources\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\NoncustodialDataSources\SecurityApplyHoldRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\NoncustodialDataSources\SecurityRemoveHoldRequestBuilder;

/**
 * Request builder for /security/cases/ediscoveryCases/{ediscoveryCase-id}/noncustodialDataSources
 */
class NoncustodialDataSourcesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get noncustodialDataSources from security
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return SecurityEdiscoveryNoncustodialDataSourceCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): SecurityEdiscoveryNoncustodialDataSourceCollectionResponse
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
     * Deserialize response to SecurityEdiscoveryNoncustodialDataSourceCollectionResponse
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
            $items[] = new SecurityEdiscoveryNoncustodialDataSource($item);
        }
        $collection = new SecurityEdiscoveryNoncustodialDataSourceCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create nonCustodialDataSources
     * @param SecurityEdiscoveryNoncustodialDataSource $body Request body
     * @return SecurityEdiscoveryNoncustodialDataSource
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SecurityEdiscoveryNoncustodialDataSource $body): SecurityEdiscoveryNoncustodialDataSource
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SecurityEdiscoveryNoncustodialDataSource
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
        return new SecurityEdiscoveryNoncustodialDataSource($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $ediscoveryNoncustodialDataSourceId The item ID
     * @return EdiscoveryNoncustodialDataSourceRequestBuilder
     */
    public function byId(string $ediscoveryNoncustodialDataSourceId): EdiscoveryNoncustodialDataSourceRequestBuilder
    {
        return new EdiscoveryNoncustodialDataSourceRequestBuilder($this->client, $this->requestUrl . '/' . $ediscoveryNoncustodialDataSourceId);
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
     * Navigate to microsoft.graph.security.applyHold
     *
     * @return SecurityApplyHoldRequestBuilder
     */
    public function securityApplyHold(): SecurityApplyHoldRequestBuilder
    {
        return new SecurityApplyHoldRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.applyHold');
    }
    /**
     * Navigate to microsoft.graph.security.removeHold
     *
     * @return SecurityRemoveHoldRequestBuilder
     */
    public function securityRemoveHold(): SecurityRemoveHoldRequestBuilder
    {
        return new SecurityRemoveHoldRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.removeHold');
    }
}

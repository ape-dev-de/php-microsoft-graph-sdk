<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CertificateBasedAuthConfigurationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\CertificateBasedAuthConfiguration;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\CertificateBasedAuthConfiguration\CertificateBasedAuthConfigurationItemRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\CertificateBasedAuthConfiguration\CountRequestBuilder;

/**
 * Request builder for /organization/{organization-id}/certificateBasedAuthConfiguration
 */
class CertificateBasedAuthConfigurationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List certificateBasedAuthConfigurations
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return CertificateBasedAuthConfigurationCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): CertificateBasedAuthConfigurationCollectionResponse
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
     * Deserialize response to CertificateBasedAuthConfigurationCollectionResponse
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
            $items[] = new CertificateBasedAuthConfiguration($item);
        }
        $collection = new CertificateBasedAuthConfigurationCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create certificateBasedAuthConfiguration
     * @param CertificateBasedAuthConfiguration $body Request body
     * @return CertificateBasedAuthConfiguration
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(CertificateBasedAuthConfiguration $body): CertificateBasedAuthConfiguration
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to CertificateBasedAuthConfiguration
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
        return new CertificateBasedAuthConfiguration($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $certificateBasedAuthConfigurationId The item ID
     * @return CertificateBasedAuthConfigurationItemRequestBuilder
     */
    public function byId(string $certificateBasedAuthConfigurationId): CertificateBasedAuthConfigurationItemRequestBuilder
    {
        return new CertificateBasedAuthConfigurationItemRequestBuilder($this->client, $this->requestUrl . '/' . $certificateBasedAuthConfigurationId);
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

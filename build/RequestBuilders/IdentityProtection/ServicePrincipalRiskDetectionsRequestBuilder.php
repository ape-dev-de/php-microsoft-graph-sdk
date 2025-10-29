<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProtection;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ServicePrincipalRiskDetectionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\ServicePrincipalRiskDetection;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProtection\ServicePrincipalRiskDetections\ServicePrincipalRiskDetectionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProtection\ServicePrincipalRiskDetections\CountRequestBuilder;

/**
 * Request builder for /identityProtection/servicePrincipalRiskDetections
 */
class ServicePrincipalRiskDetectionsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List servicePrincipalRiskDetections
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ServicePrincipalRiskDetectionCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ServicePrincipalRiskDetectionCollectionResponse
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
     * Deserialize response to ServicePrincipalRiskDetectionCollectionResponse
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
            $items[] = new ServicePrincipalRiskDetection($item);
        }
        $collection = new ServicePrincipalRiskDetectionCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to servicePrincipalRiskDetections for identityProtection
     * @param ServicePrincipalRiskDetection $body Request body
     * @return ServicePrincipalRiskDetection
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ServicePrincipalRiskDetection $body): ServicePrincipalRiskDetection
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ServicePrincipalRiskDetection
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
        return new ServicePrincipalRiskDetection($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $servicePrincipalRiskDetectionId The item ID
     * @return ServicePrincipalRiskDetectionRequestBuilder
     */
    public function byId(string $servicePrincipalRiskDetectionId): ServicePrincipalRiskDetectionRequestBuilder
    {
        return new ServicePrincipalRiskDetectionRequestBuilder($this->client, $this->requestUrl . '/' . $servicePrincipalRiskDetectionId);
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

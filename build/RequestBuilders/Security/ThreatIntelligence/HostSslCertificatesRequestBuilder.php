<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityHostSslCertificateCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityHostSslCertificate;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\HostSslCertificates\HostSslCertificateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\HostSslCertificates\CountRequestBuilder;

/**
 * Request builder for /security/threatIntelligence/hostSslCertificates
 */
class HostSslCertificatesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get hostSslCertificate
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return SecurityHostSslCertificateCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): SecurityHostSslCertificateCollectionResponse|null
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
     * Deserialize response to SecurityHostSslCertificateCollectionResponse|null
     */
    private function deserializeGet(string $body): SecurityHostSslCertificateCollectionResponse|null    {
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
            $items[] = new SecurityHostSslCertificate($item);
        }
        $collection = new SecurityHostSslCertificateCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to hostSslCertificates for security
     * @param SecurityHostSslCertificate $body Request body
     * @return SecurityHostSslCertificate|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SecurityHostSslCertificate $body): SecurityHostSslCertificate|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SecurityHostSslCertificate|null
     */
    private function deserializePost(string $body): SecurityHostSslCertificate|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SecurityHostSslCertificate($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $hostSslCertificateId The item ID
     * @return HostSslCertificateRequestBuilder
     */
    public function byId(string $hostSslCertificateId): HostSslCertificateRequestBuilder
    {
        return new HostSslCertificateRequestBuilder($this->client, $this->requestUrl . '/' . $hostSslCertificateId);
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
